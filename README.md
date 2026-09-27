# Halcon Web Application

Web application for managing customer orders, internal workflows, delivery tracking, and administrative processes for Halcon.

## Project Description

Halcon is a construction material distributor that requires a web application to automate its internal order management processes.

The system will allow customers to check the status of their orders using their customer number and invoice number.

Company employees will have access to an administrative dashboard according to their assigned role.

## Main Roles

- Administrator
- Sales
- Purchasing
- Warehouse
- Route

## Order Statuses

- Ordered
- In process
- In route
- Delivered

## Main Features

- Customer order status tracking.
- Employee authentication and role management.
- Order creation and administration.
- Order status updates.
- Delivery evidence through uploaded photographs.
- Order search and filtering.
- Logical deletion and restoration of orders.
- Administrative dashboard.

## Project Documentation

This repository includes the analysis and design documentation for the Halcon web application:

- BPMN Diagram
- Class Diagram
- Activity Diagram
- Use Case Diagram
- Entity-Relationship Diagram
- Work methodology
- Database design
- Personal reflection

## Work Methodology

### Selected Methodology: Scrum

The selected work methodology for the Halcon web application is Scrum.

Scrum was chosen because the project can be divided into different parts and developed step by step. The system includes several functions such as user management, order creation, warehouse processes, purchasing, route management, delivery evidence, order tracking, and administrative functions.

Using Scrum will allow the team to organize the requirements in a Product Backlog and work on them in short development periods called Sprints. At the end of each Sprint, the completed work can be reviewed before continuing with the next part of the project.

This methodology is useful for the Halcon project because it helps the team prioritize tasks, divide responsibilities, monitor progress, and make changes if necessary during the development process.

### Application of Scrum

The project will be developed by a team of two members. Both team members will participate in the planning, development, testing, and documentation of the application.

The requirements described in the Halcon case will be organized in a Product Backlog. The team will select the most important tasks and complete them progressively through different Sprints.

At the end of each Sprint, the team will review the completed functionality and verify that it works correctly before continuing with the next stage.

### Product Backlog

The initial Product Backlog includes the following tasks:

1. Create employee authentication.
2. Create the default administrative user.
3. Create employee roles.
4. Manage customers.
5. Create new orders.
6. Assign the default status "Ordered" to new orders.
7. Allow Warehouse users to process orders.
8. Allow Purchasing users to manage missing materials.
9. Allow Route users to manage deliveries.
10. Upload loading evidence.
11. Upload delivery evidence.
12. Allow customers to check their order status.
13. Search orders by invoice number, customer number, date, or status.
14. Edit orders.
15. Logically delete orders.
16. Restore deleted orders.

### Sprint Planning

#### Sprint 1 - Project Foundation

The first Sprint will focus on the basic structure of the application.

Tasks:

- Create the Laravel project.
- Configure the database.
- Create user authentication.
- Create the administrative user.
- Create employee roles.
- Create customer management.
- Create the basic order structure.

#### Sprint 2 - Order Management

The second Sprint will focus on the main order workflow.

Tasks:

- Allow Sales users to create orders.
- Assign invoice and customer numbers.
- Implement the order statuses:
  - Ordered
  - In process
  - In route
  - Delivered
- Implement the Warehouse process.
- Implement the Purchasing process.
- Create the order list.
- Add order search and filtering.

#### Sprint 3 - Delivery and Final Functions

The third Sprint will focus on delivery and final administrative functions.

Tasks:

- Implement Route department functions.
- Upload a photo of the loaded vehicle.
- Upload delivery evidence.
- Change the order status to Delivered.
- Implement logical deletion of orders.
- Create the deleted orders screen.
- Allow deleted orders to be restored.
- Perform final testing and documentation.

## System Diagrams

The project includes the following diagrams:

- BPMN Diagram
- Activity Diagram
- Class Diagram
- Use Case Diagram
- Entity-Relationship Diagram

The diagrams describe the workflow of an order, the actions available to each system actor, the main application classes, and the database structure.

## Database Selection

MySQL was selected as the database management system for the Halcon web application.

MySQL is a relational database that is appropriate for the structured information required by the system, including users, roles, customers, orders, materials, purchase requests, and delivery evidence.

It also integrates well with Laravel and supports the relationships, constraints, and data types required for the project.

The main database entities are:

- roles
- users
- customers
- orders
- materials
- order_items
- purchase_requests
- delivery_evidence

## Personal Reflection

I really liked this activity because it made me think more like a real software engineer. This evidence allowed me to analyze different concepts and plan a project that could realistically be developed as a real system.

One of the most useful parts of the activity was being able to analyze the problem in depth before starting to program. I had to identify the different roles involved in the process, understand the actions that each user can perform, and think about how the complete system should work.

The diagrams also helped me organize the project on paper before development. They allowed me to visualize the order process, the responsibilities of each department, the structure of the classes, and the relationships in the database.

I also liked using different tools to represent the system because it helped me understand that software development is not only about writing code. Planning, analyzing requirements, defining roles, designing processes, and organizing information are also very important parts of building a good application.

Overall, this activity helped me understand how a software project can be planned from the beginning and how an initial analysis can make the future development process more organized and effective.

## Authors

Federico David Macias Orozco
