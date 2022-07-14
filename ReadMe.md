## CRUD
A BeCode group learning challenge to learn how to connect to a database, Create entities, read data, update data and delete data trough a PHP web application using the MVC design pattern.

## Objective
Create a website where we can manage and view data about students 

## Group
- Dimi
- Cedric
- Yasser

## Roadmap
1. Create a plan of action
    - How will we use/maintain git/github!
        - Create seperate branches for every feature
        - Keep the main clean, only working and finished code will be merged here
        - Have a production branch (exact copy of main) where we can merge before merging into main
2. set up MVC Boilerplate
    - To understand how we will work with MVC we setup our own boilerplate consisting of:
        - Index.php
            - All Requires
            - A switch to navigate between pages using $_GET
        - A dedicated folder for:
            - Models
                - Helper models
            - Views
            - Controllers
        - A folder purely for documentation in between team members
3. Analyse the assignment and have a short overview of what we need
    - Models
        - Person class
            - Contains overlapping methods and attributes between Teacher and Student
        - Teacher class extends Person
        - Student class extends Person
        - Group class
    - Controllers
        - TeacherController
        - StudentController
        - GroupController
    - Views
        - StudentView
        - GroupView
        - TeacherView
4. Create the database
5. Add .env file support to the project so everyone can use the database on their local machine
6. Have a way to connect to the database
    - Yasser
        - Provides a model DB_Connector.php that can be extended. This model has a connect() function that returns a connected PDO
6. Create the actual content, for now we will try to just display info from the database for every entity
    - Dimi
        StudentController,Model,DB_StudentLoader,StudentView
    - Cedric
        TeacherController,TeacherModel,DB_TeacherLoader,TeacherView
    - Yasser
        GroupController,GroupModel,DB_GroupLoader,GroupView