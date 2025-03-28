<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
    
</head>
<body class="sidebar-hidden">
    <div class="container">
        <!-- Header / Navbar -->
        <?php include 'includes/header.php'; ?>

        <main class="main-layout">
            <div class="screen-overlay"></div>

            <!-- Sidebar -->
             <aside class="sidebar">
                    <div class="nav-section nav-left">
                        <button class="nav-button menu-button">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <a href="#" class="nav-logo">
                            <i class="fa-solid fa-play"></i>
                            <h2 class="logo-text">VeePlay</h2>
                        </a>
                    </div>

                <div class="link-container">
                    <div class="link-section">
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-video"></i> Shorts
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-briefcase"></i> Subscription
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">You</h4>
                        <a href="#" class="link-item">
                            <i class="fa-brands fa-youtube"></i> Your Channel
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-clock-rotate-left"></i> History
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-clock"></i> Watch later
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">Explore</h4>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-fire"></i> Trending
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-music"></i> Music
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-dice"></i> Gaming
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-football"></i> Sports
                        </a>

                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-gear"></i> Setting
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-regular fa-file-lines"></i> Report
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-circle-question"></i> Help
                        </a>
                        <a href="#" class="link-item">
                            <i class="fa-solid fa-triangle-exclamation"></i> Feedback
                        </a>
                    </div>
                    <div class="section-separator"></div>
                </div>
             </aside>

             <div class="content-wrapper">
                <!-- Category List -->
             <div class="category-list">
                <button class="category-button active">All</button>
                <button class="category-button">Website</button>
                <button class="category-button">Music</button>
                <button class="category-button">Gaming</button>
                <button class="category-button">Node.js</button>
                <button class="category-button">JavaScript</button>
                <button class="category-button">React.js</button>
                <button class="category-button">TypeScript</button>
                <button class="category-button">Coding</button>
                <button class="category-button">Next.js</button>
                <button class="category-button">Data analysis</button>
                <button class="category-button">Web Desing</button>
                <button class="category-button">Html</button>
                <button class="category-button">Tailwind</button>
                <button class="category-button">CSS</button>
                <button class="category-button">Express.js</button>
             </div>

             <!-- Video List -->
             <div class="video-list">
                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsu Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, aliquid? dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="video-card">
                    <div class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Thumbnai" class="thumbnail">
                        <p class="duration">10.03</p>
                    </div>
                    <div class="video-info">
                        <img src="https://i.ytimg.com/vi/OORUHkgg4IM/maxresdefault.jpg" alt="Channel Logo" class="icon">
                        <div class="video-details">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="channel-name">Lorem, ipsum.</p>
                            <p class="views">23k views ● 3 hours ago</p>
                        </div>
                    </div>
                </a>
             </div>

            </div>

        </main>
    </div>
    <script src="https://kit.fontawesome.com/dbbe8c9abe.js" crossorigin="anonymous"></script>
    <script src="public/script.js"></script>
</body>
</html> 