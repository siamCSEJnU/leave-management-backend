<h1 align="center">Leave Management System</h1>
A modern, clean, production-ready **Leave Management System API** built with:
- Laravel 12
- JWT Authentication
- Role-Based Access Control (Employee | Manager | Admin)
- MySQL
- Full CRUD + Approve/Reject Workflow

## Features

- JWT Login / Logout / Refresh
- 3 Roles: Employee, Manager, Admin
- Create, Update, Cancel Leave Requests
- Managers can Approve/Reject with notes
- Automatic leave balance deduction
- Comments on leave requests
- `/api/users/me` endpoint
- Clean RESTful routes

## API Endpoints

| Method | URL                          | Description                    | Role Required       |
|-------|------------------------------|--------------------------------|---------------------|
| POST  | `/api/auth/login`              | Login → get JWT token          | Anyone              |
| GET   | `/api/users/me`              | Get current user               | Authenticated       |
| GET   | `/api/users`                 | List users                     | Admin               |
| POST  | `/api/users`                 | Create user                    | Admin               |
| GET   | `/api/leaves`                | List leaves (own or team)      | All                 |
| POST  | `/api/leaves`                | Apply for leave                | Employee+           |
| PUT   | `/api/leaves/{id}`           | Update leave                   | Owner               |
| PATCH | `/api/leaves/{id}/approve`   | Approve leave                  | Manager/Admin       |
| PATCH | `/api/leaves/{id}/reject`    | Reject leave                   | Manager/Admin       |
| GET/POST | `/api/leaves/{id}/comments` | View/Add comments              | Involved users      |

## Setup

```bash
git clone https://github.com/siam/leave-management-system.git
cd leave-management-system
composer install
cp .env.example .env
php artisan key:generate 

Edit .env:
envDB_DATABASE=leave_db
DB_USERNAME=root
DB_PASSWORD=
Bashphp artisan migrate --seed
php artisan serve
Server running at: http://127.0.0.1:8000

Default Login Credentials






























RoleEmailPasswordAdminadmin@company.com123456Managermanager@company.com123456Employeesifat@company.com123456Employeeshakil@company.com123456

Tech Stack

Laravel 12 – Backend Framework
MySQL – Database
tymon/jwt-auth – Secure Authentication
Carbon – Smart date handling
Eloquent ORM – Clean database interactions


Author
Siam Ahmed
Dhaka, Bangladesh
GitHub: @siam
Built with passion in December 2025


  Ready for production • Perfect for job interviews • Open to contributions

```
Carbon for date handling
