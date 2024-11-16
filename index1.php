

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Literacy Training Platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles2.css">
    

</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Digital Literacy Training</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home" onclick="showSection('home')">Home</a>
                </li>
        
                
               
                <!-- Accessibility Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accessibilityDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accessibility
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accessibilityDropdown">
                        <a class="dropdown-item" href="#multiLanguage" onclick="showSection('multiLanguage')">Multi-Language Support</a>
                        <a class="dropdown-item" href="#offlineSupport" onclick="showSection('offlineSupport')">Offline Support</a>
                    </div>
                </li>
                <!-- Feedback and Support Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="feedbackSupportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Help Desk
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="feedbackSupportDropdown">
                        <a class="dropdown-item" href="faq.html" onclick="showSection('customerService')">Frequently Asked Questions</a>
                        <a class="dropdown-item" href="fb.html" onclick="showSection('mentorship')">Feedback and Support</a>
                    </div>
                </li>
                <!-- Login and Sign Up -->
                <li class="nav-item">
                    <a class="nav-link" href="login_signup.html" onclick="showSection('login')">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-sm ml-2 nav-link text-white" href="login_signup.html" onclick="showSection('signup')">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Content with Background Image -->
    <div class="main-content">
        <!-- Book Your Free Session Form -->
        <div class="book-session-form">
            <h3>Book Your Free Session</h3>
            <form action="book_session.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">Preferred Date</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mode">Mode</label>
                    <select id="mode" name="mode" class="form-control" required>
                        <option value="" disabled selected>Select Mode</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
    <section class="why-better">
        <h2>What sets us apart</h2>
        <div class="advantages-container">
            <div class="advantage-box">
                <img src="Screenshot 2024-11-06 184710.png" alt="Comprehensive Curriculum">
                <h5>Comprehensive Curriculum</h5>
                <p>Our curriculum covers essential digital skills, from beginner to advanced levels, to meet all learning needs.</p>
            </div>
            <div class="advantage-box">
                <img src="Screenshot 2024-11-06 184524.png" alt="Expert Mentorship">
                <h5>Expert Mentorship</h5>
                <p>Learn from industry experts and receive guidance to enhance your digital literacy and career prospects.</p>
            </div>
            <div class="advantage-box">
                <img src="Screenshot 2024-11-06 185524.png" alt="Interactive Learning">
                <h5>Interactive Learning</h5>
                <p>Engage in hands-on projects, quizzes, and challenges designed to solidify your knowledge.</p>
            </div>
            <div class="advantage-box">
                <img src="Screenshot 2024-11-06 184524.png" alt="Flexible Learning Options">
                <h5>Flexible Learning Options</h5>
                <p>Choose between online and offline modes to learn at your convenience, wherever you are.</p>
            </div>
        </div>
    </section>
    <section class="how-it-works">
        <h2>How It Works</h2>
        <div class="timeline">
            <div class="timeline-step">
                <div class="icon">1</div>
                <h3>Sign Up</h3>
                <p>Create an account to get started with your digital literacy journey.</p>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
                <div class="icon">2</div>
                <h3>Take the Skill Assessment</h3>
                <p>Assess your current skill level to tailor your learning experience.</p>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
                <div class="icon">3</div>
                <h3>Start Learning</h3>
                <p>Access videos, quizzes, and challenges to build your digital skills.</p>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
                <div class="icon">4</div>
                <h3>Track Progress</h3>
                <p>Monitor your achievements, badges, and milestones as you progress.</p>
            </div>
            <div class="timeline-connector"></div>
            <div class="timeline-step">
                <div class="icon">5</div>
                <h3>Earn Certification</h3>
                <p>Complete the course and receive a certification to showcase your skills.</p>
            </div>
        </div>
   <section class="programs">
    <h2>Programs & Courses Offered</h2>
    <div class="course-container">

        <!-- Example Course 1 -->
        <div class="course-card beginner">
            <div class="card-inner">
                <div class="card-front">
                    <div class="course-icon">📚</div>
                    <h3>Digital Literacy Basics</h3>
                    <p class="description">An introduction to essential digital skills for beginners.</p>
                    <p class="skill-level">Skill Level: Beginner</p>
                </div>
                <div class="card-back">
                    <h3>Expected Outcomes</h3>
                    <ul class="outcomes">
                        <li>Understanding the internet</li>
                        <li>Basic computer skills</li>
                        <li>Introduction to online safety</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Example Course 2 -->
        <div class="course-card intermediate">
            <div class="card-inner">
                <div class="card-front">
                    <div class="course-icon">💻</div>
                    <h3>Web Development Fundamentals</h3>
                    <p class="description">Learn the foundations of HTML, CSS, and JavaScript.</p>
                    <p class="skill-level">Skill Level: Intermediate</p>
                </div>
                <div class="card-back">
                    <h3>Expected Outcomes</h3>
                    <ul class="outcomes">
                        <li>Build basic websites</li>
                        <li>Understand responsive design</li>
                        <li>JavaScript for interactivity</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Example Course 3 -->
        <div class="course-card advanced">
            <div class="card-inner">
                <div class="card-front">
                    <div class="course-icon">🔐</div>
                    <h3>Advanced Cybersecurity</h3>
                    <p class="description">An in-depth look at protecting digital assets and privacy.</p>
                    <p class="skill-level">Skill Level: Advanced</p>
                </div>
                <div class="card-back">
                    <h3>Expected Outcomes</h3>
                    <ul class="outcomes">
                        <li>Network security fundamentals</li>
                        <li>Encryption techniques</li>
                        <li>Real-world case studies</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

    <!-- Footer -->
    <!-- <footer class="footer">
        <p>© 2024 Digital Literacy Training. All rights reserved.</p>
        <p>
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a> |
            <a href="#">Instagram</a>
        </p>
    </footer> -->
    <!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h4>About Us</h4>
            <p>Your trusted partner in digital literacy, providing courses designed to enhance your digital skills.</p>
        </div>
        
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#programs">Programs</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#privacy">Privacy Policy</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>Connect With Us</h4>
            <div class="social-icons">
                <a href="#" class="social-icon">🔗</a>
                <a href="#" class="social-icon">🔗</a>
                <a href="#" class="social-icon">🔗</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Digital Literacy Training. All rights reserved.</p>
    </div>
</footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>