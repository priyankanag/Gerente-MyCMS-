Gerente- Manage your softwares with us
======================================

Overall Description:

Introduction 
Gerente is a Content Management System for Software Project Management and related tasks. As we all know, a web content management system (web CMS) is a bundled or stand-alone application to create, manage, store and deploy content on Web pages. Gerente is also of the same type. In our everyday life, whenever we are working on some project, the major issue becomes that of managing the project. Project management is as important a part of the project as development is. An ill managed project will not only be badly done, it will also consume more time, more money and more resources.
Software project management is the art and science of planning and leading software projects. Gerente is the CMS which will help users to manage their projects efficiently. Keeping tracks on the different projects being worked upon, who is working upon which feature, what bugs are being reported and who are working on those bug fixing, all these are very important feautres when it comes to project management and Gerente takes care of all of these.

Requirements:

Functional requirements:
Online registration only for developers and managers. Since this CMS is expected to be used by organizations for the sole purpose of managing different projects in the organization, not much visitors are expected to be there or to be registering into the site.
Logged in users can view projects, add new projects, view bugs, add new bugs etc.
The entire CMS comes in a ready-to-use format. The admin will simply need to run the index.php on the server and set the site up only once.
Index.php file takes care of database and table creation automatically. No extra work is required from the user's end for this purpose.

Non-functional requirements: 
24 X 7 availability. 
Better component design to get better performance at peak time flexible service based architecture will be highly desirable for future extension. 
Adoption of naming convention for better readability and easier maintainability of codes. 
Simple and uniform User Interface design for user friendly use of Gerente web application. 


Stakeholders:
Anonymous users: They can be thought to be the viewers or visitors of our website. They can only see the list of the projects which are being worked upon. To do anything more on the site, the use needs to be logged in.
Registered Users: This CMS is designed to have two types of registered users 'Developers' and 'Managers'. Later several other users like 'Testers', 'Documentors' etc can be introduced into the system.
Admins: The one who is setting up the site is considered to be the admin of the site. This is true in most cases when working with any CMS. The admin is responsible for setting up of and maintainence of the site.


Features of Gerente (as a CMS for Software Project Management System):
Installation made easy: The entire site's backend which is commonly know as the site environment is prepared automatically in Gerente. The admin simply needs to run the CMS (more precisely the index.php) on the server or localhost and the database and table creation for the site will be done automatically.
The main feature of a Software Project Management System CMS will be keep track of the different projects that are being worked upon by the organization. Gerente (well after the installation, once the admin chooses a different name for the site, the site is no more named Gerente. When we refer to Gerente, we mean our CMS, not the site as such) will provide the user will the feautre of adding in projects.
The user can not only see the list of the projects being worked upon, the user can also view a project's details (like what is the project description, who is managing it etc) by a single click on any project.
The user (only registered user) will have the ability to add a new project into the system.
The user can report a bug against any project and also view the list of bugs aleady reported.
Each project will have a manager. The manager will be one of the registered user of the site only.
Each project will have developer. The developer will be one of the registered user of the site only.
Since most of the work on the site will require to be done only by registered user, there is an option for login.
New members can register into the system to be a part of the system.



Key feature of the system:
The entire configuration details for the site (which is being entered during first time installation) is being maintained in an include file named config.inc. When we need any data later, its being fetched from this configuration file only.

