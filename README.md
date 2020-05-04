<h1 align="center">CS355 - Database Systems - Fall 2019 - Group Project</h1>
<h2 align="center">evaluateHU</h2>
<h3 align="center">Group Members: Anand Kumar (ak05173), Syed Anus Ali (aa04928), Salman Younus (sy04351)</h3>
<h3 align="center">Submitted to: Dr. Ayaz H. Khan</h3>
<h3 align="center">Habib University, Karachi.</h3>

### Introduction:
The current course evaluation platform at Habib University is tedious and unreasonably complex. Currently, it forces the students to go through a list of courses offered in that semester and fill in the evaluations for the courses they are enrolled in that semester. 
The objective of our project is to allow the students to effortlessly complete their course and professor evaluations. We aim to do this by developing a web-based platform. This platform will serve two purposes for the students; allow them to complete their course/professor evaluations and read anonymized reviews of past courses/professors.
The platform will maintain a database that will store the semester-wise enrollment data of the students i.e the courses each student is enrolled in the ongoing and previous semesters. 
There will be one tab in which, once the evaluations period has begun, the evaluation forms for courses a student is enrolled in the current semester will show up as well as evaluation forms for the professor teaching that course. The student will be able to edit those forms, after he/she has filled them, till the deadline. 
In the second tab, there will be a search bar provided to search for courses or professors, and read their anonymized evaluations from previous semesters.


### Modules of the System:
- The database stores the following information of students and instructors; ID, name and email. The database also stores the ID and name of each course.
- The database identifies each student by a unique student ID, each instructor by a unique faculty ID, each course by a unique course ID and each semester by a unique semester ID. 
- A student can be enrolled in many courses in a given semester, and a course can have many students enrolled in it, in a given semester. 
- An instructor can offer many courses and different sections of a course can be offered by many instructors.
- Only the students enrolled in a course offered by a particular instructor can review the course.
- Students can review the instructor/course based on parameters such as the content of the course, its difficulty level, number of homework/assignments assigned, interactivity and assertiveness of the instructor.
- A student will only be allowed to fill the evaluation form for the course and the instructor within the evaluation period that will be set by the RO.
- The university administration will be able to access all or specific evaluations given by each student to an instructor or a course in a particular semester.
- A student can view anonymized evaluation result of the instructors.

### Front-end Development:
- Develop a course and instructor evaluation dynamic website which will facilitate students in a course evaluation period.
- A page to view specific profile for a course with all of it's past offering mentioned and the individual & avergae reviews for it.
- Instructors profile with student's reviews.

### Database Systems:
- To create a profile management system for faculty, which will give an overview of the past experience of instructors with a particular course or in general.
- To create a student and faculty registration system.
- To create a system to provide reviews, to faculty and courses, by students which can be public or anonymous.
- To generate top review results of the courses when a relevant search query is entered.
- To allow students and professors to view previously filled evaluation forms.

### Tools & Technologies:
- Back-end: MS-SQL Server
- Front-end: HTML5, CSS and JavaScript.
