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
                'title' => 'Twitter',
                'name' => 'icons.twitter',
                'url' => 'https://x.com/?lang=en',
            ],
            [
                'title' => 'Facebook',
                'name' => 'icons.facebook',
                'url' => 'https://facebook.com/',
            ],
            [
                'title' => 'Instagram',
                'name' => 'icons.instagram',
                'url' => 'https://www.instagram.com/chhaganipiyush03',
            ],
            [
                'title' => 'Linkedin',
                'name' => 'icons.linkedin',
                'url' => 'https://www.linkedin.com/in/',
            ],
        ],
        'taglist' => [
            [
                'id' => 'trends',
                'name' => 'Trends',
            ],
            [
                'id' => 'tips',
                'name' => 'Tips',
            ],
            [
                'id' => 'ideas',
                'name' => 'Ideas',
            ],
            [
                'id' => 'security',
                'name' => 'Security',
            ],
            [
                'id' => 'gaming',
                'name' => 'Gaming',
            ],
            [
                'id' => 'climate',
                'name' => 'Climate',
            ],
            [
                'id' => 'gear',
                'name' => 'Gear',
            ],
            [
                'id' => 'reviews',
                'name' => 'Reviews',
            ],
        ],
        'routes' => [
            [
                'name' => 'welcome',
                'path' => '/',
                'view' => 'welcome',
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
                'title' => 'EXPLORE',
                'image' => 'images\explore.jpeg',
                'description' => ' Dive into a world of possibilities as you explore our diverse offerings. From innovative projects and engaging articles to thought-provoking discussions, there something for everyone. Whether you re seeking inspiration, knowledge, or simply a new adventure, our platform invites you to discover new ideas and connect with a vibrant community. Join us on this journey of exploration, where every click opens the door to new insights and experiences',
                'category' => 'project',
                'duration' => '6 mins',
                'date' => 'Aug 9, 2024',
            ],
            [
                'id' => '2',
                'title' => 'Flipkart',
                 'image' => 'images\shopping.jpeg',
                'description' => 'Flipkart is one of India’s leading e-commerce platforms, revolutionizing the way people shop online. Founded in 2007, it offers a wide range of products, from electronics and fashion to home essentials and groceries. Flipkart is known for its customer-centric approach, providing features like easy returns, cash on delivery, and a vast selection of brands and products.

With innovations such as Flipkarts Big Billion Days sale, it has captured the hearts of millions of shoppers across the country. The platform continues to enhance its services through technology and partnerships, aiming to deliver a seamless shopping experience. Whether youre looking for the latest gadgets or trendy apparel, Flipkart is your one-stop destination for all your shopping needs.',
                'category' => 'E-Commerce',
                'duration' => '6 mins',
                'date' => 'Aug 9, 2024',
            ],
            [
                'id' => '3',
                'title' => 'Amazon',
               'image' => 'images\amazon.jpeg',
                'description' => 'Amazon is a global leader in e-commerce and cloud computing, founded by Jeff Bezos in 1994. Initially starting as an online bookstore, Amazon has since expanded into a vast marketplace offering millions of products, including electronics, apparel, groceries, and digital content.

With its customer-centric philosophy, Amazon provides convenient services such as Prime membership, which offers fast shipping, exclusive deals, and access to streaming services. The company is also known for its innovative technologies, including Alexa, Amazon Web Services (AWS), and Kindle e-readers.

Amazons commitment to customer satisfaction and continuous innovation has transformed it into a household name, making it a go-to platform for shoppers around the world.',
                'category' => 'E-Commerce',
                'duration' => '6 mins',
                'date' => 'Aug 9, 2024',
            ],
            [
                'id' => '4',
                'title' => 'Meesho',
                'image' => 'images\meesho.jpeg',
                'description' => 'Meesho is a rapidly growing social e-commerce platform in India, founded in 2015. It empowers small businesses and individual entrepreneurs to sell products online through social media channels like WhatsApp, Facebook, and Instagram. Meesho offers a wide range of products, including fashion, home goods, and accessories, making it easy for sellers to curate and promote their collections.

With a focus on affordability and accessibility, Meesho allows users to start their online businesses with no upfront investment, providing them with tools for product sourcing, order management, and logistics. The platform has gained immense popularity among resellers and buyers alike, promoting the idea of "shop from home" while supporting local businesses.

Meeshos unique approach to e-commerce has made it a key player in the Indian market, fostering a vibrant community of sellers and consumers who value quality and convenience.',
                'category' => 'E-Commerce',
                'duration' => '6 mins',
                'date' => 'Aug 9, 2024',
            ],
            [
                'id' => '5',
                'title' => 'Myntra',
                'image' => 'images\myntra.jpeg',
                'description' => 'Myntra is one of Indias leading fashion e-commerce platforms, established in 2007. Known for its vast selection of clothing, accessories, and lifestyle products, Myntra offers a unique shopping experience with a focus on trendy and stylish items for men, women, and children.

With a commitment to customer satisfaction, Myntra provides a range of services including easy returns, cash on delivery, and personalized recommendations. The platform frequently collaborates with top fashion brands and designers, ensuring customers have access to the latest trends and exclusive collections.

Myntra has also embraced the concept of “Myntra Fashion Superstar,” a reality show aimed at identifying fashion influencers, further solidifying its position in the fashion industry. Whether you’re looking for everyday wear or special occasion outfits, Myntra is a go-to destination for fashion enthusiasts in India.',
                'category' => 'E-Commerce',
                'duration' => '6 mins',
                'date' => 'Aug 9, 2024',
            ],
            
        ],
    ];
