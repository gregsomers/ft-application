# Freelancer Tools

### NOTE: The frontend of this application is currently being re-written using AngularJS and may not work as expected

Freelancer Tools (FT) is currently a work in progress. The finished project aims to provide
the following functionality to freelancers and independent contractors in a self-hosted environment.

Functionality Currently implemented:
* Invoicing
    * Emailing invoices and notifications
    * Invoice PDF generation
    * Tracking invoice payments
    * PayPal Express payments
* Time Tracking
    * Create projects, activities and time logs
    * Track billed and unbilled time

## Live Demo
http://timedemo.gregsomers.com/
Username: demo
Password: demo

## Requirements

FT is a Symfony 2 based application with the following requirements:

* PHP 5.3.10 or above
* Any additional requirements for Symfony 2.6.x 

## Installation instructions

FT uses [Composer][1] to manage package dependencies.

- If you don't have Composer yet, download it and follow the instructions on http://getcomposer.org/

- Clone https://github.com/gregsomers/ft-application.git FT project with:

```bash
git clone https://github.com/gregsomers/ft-application.git 
```

- Install FT dependencies with composer.
  Go to ft-application folder and run composer installation:

```bash
php composer.phar install
```
