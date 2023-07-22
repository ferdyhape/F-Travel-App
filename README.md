# Travel App

## Table of Contents

1. [Creator](#creator)
2. [Description](#description)
3. [Feature](#feature)
4. [Database Design (ERD)](#database-design-erd)
5. [How To Use](#how-to-use)
6. [About Creator](#about-creator)

## Creator
Name: ``` Ferdy Hahan Pradana ```

Campus: ``` Politeknik Negeri Malang ```

## Description
- This repository was created to fulfill the duties of a prospective intern as a Web Developer at PT Adma Digital Solusi.

## Feature 
1.  Authentication (Login, Register, Logout)
2.  Booking Travel Trip
3.  Cancel Booking Travel Trip
4.  Upload Payment Proof
5.  Register New Company
6.  Dashboard Travel Company
7.  Manage Travel Trip
8.  Update Company Profile
9.  Manage Payment

## Database Design (ERD)
<p align="center">
  <img src="https://github.com/ferdyhape/F-Travel-App/assets/75787853/a5e1afbf-eb02-4c10-910c-80e5f33645f7" width="90%" height="90%">
</p>

## How To Use
1.  Clone this repository
    ```
    git clone https://github.com/ferdyhape/F-Travel-App.git
    ```
2.  Copy paste **.env.example** file and rename as **.env**
3.  Adjust the database name in the env file on **DB_DATABASE**

3.  Generate Key
    ```
    php artisan key:generate
    ```
4.  Install dependencies
    ```
    composer install
    ```
5.  Generate mirror link
    ```
    php artisan storage:link
    ```
6.  Migrate the tables
    ```
    php artisan migrate
    ```

7.  Insert the data from seeder to database
    ```
    php artisan db:seed
    ```

8.  Start the server
    ```
    php artisan serve
    ```

9.  Login with this crediential

    * Email: <br><br>
      ```
      ferdy@hape.com
      ```
    * Password: <br><br>
      ```
      password
      ```
    
11. Enjoy use!

### About Creator
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://www.ferdyhape.site/)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ferdy-hahan-pradana)
[![instagram](https://img.shields.io/badge/instagram-833AB4?style=for-the-badge&logo=instagram&logoColor=white)](https://instagram.com/ferdyhape)
[![github](https://img.shields.io/badge/github-333?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ferdyhape)
