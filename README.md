# Gym Management System

A comprehensive web-based gym management application built to streamline gym operations and enhance member experience.

## 🚀 Features

- **Member Management**: Register new members, update profiles, and track membership status
- **Membership Plans**: Flexible membership plans with different durations and pricing
- **Payment Tracking**: Monitor membership fees, due dates, and payment history
- **Admin Dashboard**: Comprehensive dashboard for gym administrators
- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Member Portal**: Dedicated login area for members to view their information

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, Bootstrap 4
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (XAMPP/WAMP recommended)

## 📋 Prerequisites

Before running this application, make sure you have:

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache Web Server
- XAMPP/WAMP/LAMP stack

## ⚙️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/lakshayy1509/Gym-management-system.git
   cd Gym-management-system
   ```

2. **Set up the database**
   - Start your MySQL server
   - Create a new database named `gym_management`
   - Import the provided SQL file (if available) or create tables as per the schema

3. **Configure database connection**
   - Open the database configuration file
   - Update the database credentials (host, username, password, database name)

4. **Start the application**
   - Move the project folder to your web server directory (htdocs for XAMPP)
   - Start Apache and MySQL services
   - Access the application via `http://localhost/Gym-management-system`

## 📊 Database Schema

The application uses the following main tables:
- `members` - Store member information
- `membership_plans` - Different membership packages
- `payments` - Payment records and transactions
- `admin` - Administrator login credentials

## 🎯 Usage

### For Administrators:
1. Login with admin credentials
2. Add/Edit/Delete members
3. Manage membership plans
4. Track payments and generate reports
5. View dashboard analytics

### For Members:
1. Login with member credentials
2. View membership details
3. Check payment history
4. Update personal information

## 🔐 Default Login Credentials

**Admin Login:**
- Username: admin
- Password: admin123

*(Note: Change default credentials after installation)*

## 📝 Future Enhancements

- [ ] Online payment integration
- [ ] Email notifications for membership expiry
- [ ] Workout tracking system
- [ ] Mobile app development
- [ ] Advanced reporting and analytics

 👨‍💻 Author

**Lakshay**
- GitHub: [@lakshayy1509](https://github.com/lakshayy1509)

🙏 Acknowledgments

- Bootstrap team for the responsive framework
- PHP community for extensive documentation
- MySQL for robust database management

⭐ Star this repository if you found it helpful!
