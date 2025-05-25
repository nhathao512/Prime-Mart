# 🛒PRIME-MART: A Sales Website

## Project Overview
**PRIME-MART** is a sales platform inspired by similar e-commerce websites like Bach Hoa Xanh. This application provides a seamless shopping experience, allowing users to search for products, add items to their cart, receive product suggestions, and access customer support easily.

---

## Key Features

### **1. Product Management**
- **Product Listing**:
  - Display all available products categorized for easy navigation.
- **Product Details**:
  - Provide detailed descriptions, images, and prices.

### **2. Cart Functionality**
- **Add to Cart**:
  - Users can add desired items to their cart.
- **View and Modify Cart**:
  - Allow users to view, update, or remove items from their cart.
- **Checkout Process**:
  - Streamlined checkout process with payment options.

### **3. Customer Support**
- **Contact Form**:
  - Users can reach out for support via the contact page.
- **Mailbox**:
  - Admins can manage and respond to user queries.

### **4. User Authentication**
- **Login/Signup**:
  - Secure user registration and login functionalities.
- **Change Password**:
  - Allow users to update their account credentials.

### **5. Recommendations and History**
- **Product Suggestions**:
  - Recommend similar products based on user interactions.
- **Order History**:
  - Display a history of previously purchased products.

---

## Project Structure

```plaintext
PRIME-MART
├── SourceCode               # Main source code folder
│   ├── admin                # Admin dashboard for managing products and users
│   ├── api                  # API endpoints for data handling
│   ├── cart                 # Cart functionality
│   ├── css                  # Stylesheets
│   ├── database             # Database scripts and configurations
│   ├── fonts                # Fonts used in the project
│   ├── images               # Image assets
│   ├── js                   # JavaScript files
│   ├── Layout               # Layout templates
│   ├── lib                  # Third-party libraries
│   ├── utils                # Utility PHP files
│   │   ├── AboutUs.php
│   │   ├── changePass.php
│   │   ├── checkout_product.php
│   │   ├── collection.php
│   │   ├── config.php
│   │   ├── contact_us.php
│   │   ├── dbhelper.php
│   │   ├── history_product.php
│   │   ├── index.php
│   │   ├── login.php
│   │   ├── logout.php
│   │   ├── mailbox.php
│   │   ├── shop.php
│   │   ├── shopping-cart.php
│   │   ├── signup.php
│   │   ├── single_product.php
│   │   ├── style.css
│   │   └── utility.php
├── LICENSE.md               # License information
└── README.md                # Project documentation
```

---

## Getting Started

### Clone the Repository
To get started with this project, clone the repository using the following command:

```bash
git clone https://github.com/nhathao512/Prime-Mart.git
```

### Installation
1. Navigate to the `SourceCode` directory:
   ```bash
   cd SourceCode
   ```
2. Set up the database by importing the scripts from the `database` folder into your MySQL server.
3. Configure the `config.php` file with your database credentials.
4. Run the project using a local server (e.g., XAMPP, WAMP).

---

## Technologies Used

- **Frontend**:
  - HTML, CSS, JavaScript
- **Backend**:
  - PHP
- **Database**:
  - MySQL

---

## Future Enhancements

- **Mobile App Integration**:
  - Develop a mobile app for iOS and Android.
- **AI-Based Recommendations**:
  - Leverage machine learning for personalized product suggestions.
- **Advanced Analytics**:
  - Provide detailed sales and user interaction analytics for admins.

---

## Acknowledgments
Thank you for visiting this repository! Your feedback and contributions are valuable to us. Feel free to open an issue or submit a pull request if you have suggestions for improvement.

---

## License
This project is licensed under the [License](LICENSE.md).

---

## Author
This project was developed by:
- [Vo Nhat Hao](https://github.com/nhathao512)
- [Dang Thanh Nhan](https://github.com/nhandang02)
- [Ngo Duc Huy](https://github.com/Hyun177)
- [Nguyen Thanh Nhan](https://github.com/thanhnhanzxc)

**Experience seamless shopping with PRIME-MART! ❤️**
