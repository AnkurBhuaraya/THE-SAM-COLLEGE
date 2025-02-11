/* Updated CSS for better visuals and interactivity */

/* General Styles */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
}
h1, h2, h3, h4, h5, h6 {
    margin: 0;
    color: #222;
}
p {
    margin: 10px 0;
    color: #555;
}

a {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s;
}
a:hover {
    color: #f44336;
}

/* Header Section */
.sub-header {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imges/header-bg.jpg') no-repeat center/cover;
    height: 60vh;
    color: #fff;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.sub-header h1 {
    font-size: 3rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
    background: rgba(0, 0, 0, 0.7);
    position: fixed;
    width: 100%;
    z-index: 1000;
}
nav img {
    width: 120px;
}
nav ul {
    display: flex;
    list-style: none;
}
nav ul li {
    margin: 0 1rem;
}
nav ul li a {
    color: #fff;
    font-size: 1rem;
    font-weight: 500;
}

.nav_links ul li:hover a {
    color: #f44336;
}

/* Courses Overview */
.course-overview {
    padding: 4rem 5%;
    background: #f9f9f9;
    text-align: center;
}
.course-overview h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #222;
}
.course-overview p {
    margin-bottom: 2rem;
    font-size: 1.2rem;
    color: #555;
}
.course-overview .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
}
.course-col {
    flex: 1;
    max-width: 300px;
    background: #fff;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}
.course-col:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}
.course-col h3 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #333;
}
.course-col p {
    margin-bottom: 1.5rem;
    font-size: 1rem;
    color: #666;
}
.course-col .hero-btn {
    background: #f44336;
    color: #fff;
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s;
}
.course-col .hero-btn:hover {
    background: #d32f2f;
}

/* Department Sections */
.department-section {
    padding: 4rem 5%;
    background: #fff;
    text-align: left;
}
.department-section h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}
.department-section p {
    margin-bottom: 2rem;
}
.course-detail {
    background: #f9f9f9;
    padding: 2rem;
    border-radius: 10px;
    margin-bottom: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.course-detail h3 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    color: #222;
}
.course-detail ul {
    margin: 1rem 0;
    padding-left: 1.5rem;
    list-style: disc;
    color: #555;
}
.course-detail ul li {
    margin-bottom: 0.5rem;
}

/* Footer */
.footer {
    background: #222;
    color: #fff;
    padding: 2rem 0;
    text-align: center;
}
.footer h4 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
}
.footer p {
    font-size: 0.9rem;
    margin-bottom: 1.5rem;
}
.footer .icons {
    display: flex;
    justify-content: center;
    gap: 1rem;
}
.footer .icons i {
    font-size: 1.5rem;
    cursor: pointer;
    color: #f44336;
    transition: transform 0.3s;
}
.footer .icons i:hover {
    transform: scale(1.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
        display: none;
    }
    .nav_links {
        position: absolute;
        right: 0;
        top: 0;
        background: #222;
        width: 50%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .nav_links ul {
        display: flex;
        flex-direction: column;
    }
    .course-overview .row {
        flex-direction: column;
    }
    .department-section {
        padding: 2rem 1.5rem;
    }
}
