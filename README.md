# LMS
**Laundry Management System - Read Me**

![PHP Version](https://img.shields.io/badge/PHP-7.3.21%20or%20below-blue.svg)

Welcome to the Laundry Management System! This system is designed to streamline and enhance the management of laundry services for businesses. From order tracking to employee record-keeping, this application offers a comprehensive solution to efficiently manage various aspects of a laundry business.

## Features

- **Order Tracking:** Keep track of incoming orders, their status, and delivery dates. Easily update and manage orders throughout their lifecycle.

- **Customer Tracking:** Maintain a database of customer information, allowing you to quickly retrieve customer details and order history for personalized service.

- **Expenses:** Keep records of expenses related to the laundry business, including utility bills, maintenance costs, and other expenditures. Gain insights into the financial health of your business.

- **Inventory Tracking:** Monitor and manage inventory levels of detergents, fabric softeners, and other laundry supplies. Receive alerts when stock is running low.

- **Employee Records Tracking:** Maintain employee records, including contact information, roles, and work schedules. Efficiently manage shifts and track attendance.

## Prerequisites

To run the Laundry Management System, ensure you have the following:

- PHP version 7.3.21 or below.
- Web server (e.g., Apache(wamp,xamp), Nginx) with PHP support.
- MySQL or any compatible database management system.

## Installation

1. Clone this repository to your web server's root directory or a subdirectory of your choice.

```bash
git clone https://github.com/your-username/LMS.git
```

2. Create a new database in your MySQL instance for the system, name it lsm.

3. Import the provided SQL dump file (`lsm.sql`) into your newly created database(file can be found in the sql folder directory). This will set up the necessary tables and initial data.

4. Edit the `config.php` file located in the root directory of the system(dbconfig/config.php). Update the database connection details to match your setup.

```php
<?php  

	//connecting to database

	$conn = mysqli_connect("your-database-host", "your-database-username", "your-database-password", "lsm");

	if (!$conn) {
		// code...
		echo "error in connection". mysqli_connect_error($conn);
	}

?>
```

5. Ensure that your web server is configured to point to the system's directory.

6. Open your web browser and navigate to the system's URL. You should see the login page.

7. Use the default admin credentials to log in:

   - Username: admin
   - Password: admin123

8. Once logged in, you can explore and start using the various features of the Laundry Management System.

## Troubleshooting

- If you encounter any issues related to PHP version compatibility, ensure that your server is using PHP version 7.3.21 or below.

- For other technical or usage-related problems, please refer to the documentation or seek assistance from the developer community.

## Contributions

We welcome contributions to enhance the functionality and usability of the Laundry Management System. If you'd like to contribute, please follow our guidelines for pull requests and issue reporting outlined in the `CONTRIBUTING.md` file.



---
![dashboard](https://github.com/petson15/LMS/assets/82520771/5ca6a45e-8de4-468a-ba6a-c9f3cb983c28)
![Capture](https://github.com/petson15/LMS/assets/82520771/53e1520e-0ce2-4ef8-8b2c-2aa9f0aee736)
![pos-](https://github.com/petson15/LMS/assets/82520771/5ef94b34-7785-4529-bf3d-007dc7cb34de)
![pos](https://github.com/petson15/LMS/assets/82520771/5ea73951-4fee-49a4-b10e-02b45930e4e6)
![login page](https://github.com/petson15/LMS/assets/82520771/9e56fa58-db2b-4bce-b606-61182c3adfa5)


