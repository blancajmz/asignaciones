<?php

namespace BIJI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use BIJI\UserBundle\Entity\User;
use BIJI\UserBundle\Form\UserType;

class UserController extends Controller
{
    /*Accion para dar bienvenida a los usuarios que se autenticaron exitosamente*/
    public function homeAction()
    {
        return $this->render('BIJIUserBundle:User:home.html.twig');
    }

    public function indexAction(Request $request)
    {
        $searchQuery = $request->get('query');

        //print_r($searchQuery);
        //exit();

        /*¿Se ha enviado algun termino de busqueda desde mi formulario?*/
        if(!empty($searchQuery))
        {
            $finder = $this->container->get('fos_elastica.finder.app.user');
            $users = $finder->createPaginatorAdapter($searchQuery);
        }
        else
        {
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT u FROM BIJIUserBundle:User u ORDER BY u.id DESC";
            $users = $em->createQuery($dql);
        }

        /*$em = $this->getDoctrine()->getManager();
        $dql = "SELECT u FROM BIJIUserBundle:User u ORDER BY u.id DESC";
        $users = $em->createQuery($dql);*/

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $users, $request->query->getInt('page', 1), 10
        );

        $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'biji_user_delete');

        return $this->render('BIJIUserBundle:User:index.html.twig', array('pagination' => $pagination,
            'delete_form_ajax' => $deleteFormAjax->createView()));
    }

    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        return $this->render('BIJIUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }

    //MÉTODO QUE CREA EL FORMULARIO "CREAR USUARIO"
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(UserType::class, $entity, array(
            'action' => $this->generateUrl('biji_user_create'),
            'method' => 'POST'
        ));
        return $form;
    }

    //ACCION QUE PROCESA LOS DATOS DEL FORMULARIO "CREAR USUARIO"
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $password = $form->get('password')->getData();

            //Si se crea un usuario con password vacía
            $passwordConstraint = new Assert\NotBlank(); //new Assert\NotBlank()
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);

            if(count($errorList)==0)
            {
                //Encriptando el password
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user,$password);

                $user->setPassword($encoded);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                //Envía una alerta de que se ha creado el usuario
                $successMessage = $this->get('translator')->trans('The user has been created');
                $this->addFlash('mensaje', $successMessage);

                //Una vez creado el usuario, redirige al listado de usuarios donde podremos visualizarlo
                return $this->redirectToRoute('biji_user_index');
            }
            else
            {
                $errorMessage= new FormError($errorList[0]->getMessage());           //new FormError\
                $form->get('password')->addError($errorMessage);
            }
        }
        return $this->render('BIJIUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }

    //ACCION QUE
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BIJIUserBundle:User')->find($id);

        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($user);

        return $this->render('BIJIUserBundle:User:edit.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    //MÉTODO QUE CREA EL FORMULARIO "EDITAR USUARIO"
    private function createEditForm(User $entity)
    {
       $form = $this->createForm(UserType::class, $entity, array('action' => $this->generateUrl
            ('biji_user_update', array('id' => $entity->getId())), 'method' => 'PUT'));
        return $form;
    }

    //ACCION QUE PROCESA LOS DATOS DEL FORMULARIO "EDITAR USUARIO"
    public function updateAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BIJIUserBundle:User')->find($id);

        //¿Existe el usuario correspondiente?
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $password = $form->get('password')->getData();

            //Si el campo contraseña está LLENO, se actualiza el cambio de contraseña y se encripta
            if(!empty($password))
            {
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $password);
                $user->setPassword($encoded);
            }
            //Si el campo contraseña está VACIO, conserva la contraseña que ya estaba registrada
            else
            {
                $recoverPass = $this->recoverPass($id);
                $user->setPassword($recoverPass[0]['password']);
            }

            //Condicionar para impedir que un usuario con rol ADMIN desactive su cuenta

            //Si el rol corresponde a un ROLE_ADMIN
            if($form->get('role')->getData() == 'ROLE_ADMIN')
            {
                $user->setIsActive(1);
            }

            $em->flush();
            $successMessage = $this->get('translator')->trans('The user has been modified.');
            $this->addFlash('mensaje', $successMessage);
            return $this->redirectToRoute('biji_user_edit', array('id' => $user->getId()));
        }
        return $this->render('BIJIUserBundle:User:edit.html.twig', array('user' => $user, 'form' => $form->createView()));

    }
    private function recoverPass($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u.password
            FROM BIJIUserBundle:User u
            WHERE u.id = :id'
        )->setParameter('id', $id);

        $currentPass = $query->getResult();

        return $currentPass;
    }

    //ACCION QUE PROCESA LOS DATOS DEL INDEX
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('BIJIUserBundle:User');

        $user = $repository->find($id);

        //¿Existe el usuario correspondiente?
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $deleteForm = $this->createCustomForm($user->getId(), 'DELETE', 'biji_user_delete');


        return $this->render('BIJIUserBundle:User:view.html.twig', array('user' => $user, 'delete_form' => $deleteForm->createView()));
    }

    //
    private function createDeleteForm($user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('biji_user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    //Accion que
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BIJIUserBundle:User')->find($id);

        /*¿Existe el usuario correspondiente?*/
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }
        /*Saca el total de los registros*/
        $allUsers = $em->getRepository('BIJIUserBundle:User')->findAll();
        $countUsers = count($allUsers);

        /*Llamar al formulario*/
        //$form = $this->createDeleteForm($user);
        $form = $this->createCustomForm($user->getId(), 'DELETE', 'biji_user_delete');;
        $form->handleRequest($request);

        /*Valida si el formulario se envió y es válido*/
        if($form->isSubmitted() && $form->isValid())
        {
            if($request->isXMLHttpRequest())
            {
                $res = $this->deleteUser($user->getRole(), $em, $user);

                return new Response(
                    json_encode(array('removed' => $res['removed'], 'message' => $res['message'],
                        'countUsers' => $countUsers)),
                    200,
                    array('Content-Type' => 'application/json')
                );
            }

            $res = $this->deleteUser($user->getRole(), $em, $user);

            $this->addFlash($res['alert'], $res['message']);
            return $this->redirectToRoute('biji_user_index');
        }
    }

    //
    private function deleteUser($role, $em, $user)
    {
        //Eliminacion del usuario si es de tipo ROLE_USER
        if($role == 'ROLE_USER')
        {
            $em->remove($user);
            $em->flush();

            $message =  $this->get('translator')->trans('The user has been deleted.');
            $removed = 1;
            $alert = 'mensaje';
        }
        elseif($role == 'ROLE_ADMIN')
        {
            $message =  $this->get('translator')->trans('The user could not be deleted.');
            $removed = 0;
            $alert = 'error';
        }
        return array('removed' => $removed, 'message' => $message, 'alert' => $alert);

    }

    //Estructura el formulario createCustom
    private function createCustomForm($id, $method, $route)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, array('id' => $id)))
            ->setMethod($method)
            ->getForm();
    }
}
