    <?php

    return [
        'sitename' => 'Piyush Chhagani',
        'navlinks' => [
            [
                'id' => 'home',
                'name' => 'HOME',
                'url' => '/',
                'image' => 'images/home.jpeg',
            ],
            [
                'id' => 'about',
                'name' => 'ABOUT',
                'url' => '/about',
                'image' => 'images/about.jpeg',
            ],
            
            [
                'id' => 'contact',
                'name' => 'CONTACT',
                'url' => '/contact',
                'image' => 'images/contact.jpeg',
            ],

            [
                'id' => 'project',
                'name' => 'PROJECTS',
                'url' => '/projects',
                'image' => 'images/project.jpeg',
            ],
        ],
    
        'footerlinks' => [
            [
                'name' => 'Home',
                'url' => '/',
            ],
            [
                'name' => 'About',
                'url' => '/about',
            ],
            [
                'name' => 'Contact',
                'url' => '/contact',
            ],
            [ 
                'name' => 'Project',
                'url' => '/projects',   
            ],
            
        ],
        'sociallinks' => [
        
            
            [
                'title' => 'Instagram',
                'name' => 'icons.instagram',
                'url' => 'https://www.instagram.com/chhaganipiyush03',
            ],
            [
                'title' => 'Linkedin',
                'name' => 'icons.linkedin',
                'url' => 'https://www.linkedin.com/in/piyushchhagani1817131103',
            ],
        ],
        'taglist' => [
            [
                'id' => 'education',
                'name' => 'Education'
                ,
            ],
            [
                'id' => 'skills',
                'name' => 'Skills',
            ],
            [
                'id' => 'ideas',
                'name' => 'Ideas',
            ],
           
            [
                'id' => 'gaming',
                'name' => 'Gaming',
            ],
            
            
            [
                'id' => 'reviews',
                'name' => 'Reviews',
            ],
        ],
        'routes' => [
            [
                'name' => 'home',
                'path' => '/',
                'view' => 'home',
            ],
           
            [
                'name' => 'about',
                'path' => '/about',
                'view' => 'about',
            ],

            [
                'name' => 'contact',
                'path' => '/contact',
                'view' => 'contact',
            ],
            [
                'name' => 'projects',
                'path' => '/projects',
                'view' => 'projects',
            ],
           
        
        ],
        'articles' => [
            [
                'id' => '1',
                'title' => 'KNOW MORE',
                'image' => 'images\explore.jpeg',
                'description' => ' Piyush Chhagani is a passionate writer and tech enthusiast dedicated to sharing insights on technology, innovation, and personal growth. With a background in computer science and years of experience in the industry, Piyush combines technical knowledge with a flair for storytelling to engage readers. When not writing, you can find him exploring new technologies, reading, or enjoying the outdoors. His mission is to inspire others to embrace curiosity and pursue their passions, one article at a time. ',
                'category' => 'EXPLORE',
                'duration' => '6 mins',
                'date' => 'NOV 13, 2003',
                
            ],
            [
                'id' => '2',
                'title' => 'Skills',
                 'image' => 'images\skill.jpeg',
                'description' => 'Communication Skills,
                Content Writing Skills,
                Leardership Skills,
                Manangement Skills,
                Effective Listener',

     'category' => 'skills',
     'duration' => '6 mins',
                'date' => 'NOV 13, 2003',
                
            ],
            [
                'id' => '1',
                'title' => 'EDUCATION',
                'image' => 'images\edu.jpeg',
                'description' => ' EDUCATION
                    Currently pursuing B.TECH FROM Shri Ramdeobaba College of Engineering and Management
                    Nagpur ,M.H. in Computer Science and Engineering (DATA SCIENCE).....
                    SENIOR SECONDARY SCHOOL--
                    12th CBSE BOARD from ST. Francis of Assisi School in 
                    2021 - 2022, Seoni, M.P.......
                    SECONDARY SCHOOL---
                    10th CBSE BOARD from ST. Francis of Assisi School
                    2019 - 2020, Seoni, M.P.',
                'category' => 'Education',
                'duration' => '6 mins',
                'date' => 'NOV 13, 2003',
                
            ],
            
           
            
        ],
    ];
