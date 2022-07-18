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

## Group member recap
The story of every group member on how they experienced this project and tackled certain struggles on the creation of this project.

### Cedric's Recap
For me this project was really intense to say the least. 2 weeks of absence in Becode feels like 6 months. Lots of new stuff to cover and pretty overwhelming. We had the option to choose solo or group project for this CRUD exercise. I went to the solo side as I like to work alone and figure out these things myself. As the vote was a tie, we flipped a coin. Really glad the coin flip decided differently. Great coin flip Sicco. So I learned a lot on this project, for example the .env file. Pretty important to protect your sensitive data it turns out. The MVC design pattern is another thing of course. 

This, however, is not what I take home from this assignment. For me it was working with Dimi and Yasser. They sunk a lot of hours into explaining all kinds of different things to me and were incredibly patient. From the whole PHP MVC Boilerplate through the hellfires of Git and Github, they offered their guidance. “Not all heroes wear capes”. At the start of this training I remember the coaches saying: “Help each other, we find this very important and this is the community we are trying to build”. Well, I can honestly say it’s a great community we have here and I’m glad to be a part of it. Also outside of my group there were people offering resources and help to me if needed so a shoutout to those as well. 

Am I proficient in PHP OOP MVC? Far from it. Do I need some more work in databases? Absolutely! Did I completely dismantle the Dark Arts of Git and Github? Not yet, but with this community I certainly will. So all in all a great experience for me.

Thanks boys!


### Dimi's Recap


### Yasser's Recap

Starting this project I had kind of an idea of how to get started, tough due to my abscence I still had some struggles with SQL.
After a short demo, I did see that we're all supposed to use DataGrip. No need to write all the SQL on my own O.o, -- Amazed --.
After a short talk with my fellow group members, I noticed Dimi is very comfortable with his SQL skills, tough Cedric felt as lost as I did a week ago after a long abscence.
So my personal goal was to have Cedric feel at home with MVC and OOP.

We quickly agreed on some good Git behaviour! and setup the MVC pattern together just so everyone understood what was going on.
We gave Cedric some time to wrap his head around this beefy project(oop,mvc,databases,...) while Dimi setup a database and I worked on our roadmap to a working website.

Eventually we divided the different pages, and I tried to get somethign working asap. Tough I personally wanted to dive into the rabbit hole of creating a full flexed database management webapp. This was not my goal. I wanted to be the support I would have liked to have when returning to this confusing SQL madness. So I spent the last 2 days trying to instead of writing perfect code, write an understandable readable codebase that functions.

In the end I personally am not happy with the result we have in the webapp. I would have really liked some detailed view models, some more checks in our codebase and overall some better/user friendly UI.
Tough I am happy with the result of our project since we all got to learn a lot, and our whole  group understands everything we have. (instead of having some magic happen by googling and making a beatifull copy pasta bolognaise).

I did learn a lot about PDO tough, too bad the time limit didn't allow me to reflect that in my Code. But I am sure I will get the chance to use what I learned in the future. 
The way PDO prepares and executes SQL towards the database and the use of the .env file is a nice takeaway from this learning challenge tough!


