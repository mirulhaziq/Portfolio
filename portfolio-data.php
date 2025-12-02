<?php

return [
    'meta' => [
        'name' => 'Amirul Haziq bin Shazlee',
        'logo' => 'AMIRUL HAZIQ',
        'title' => 'Amirul Haziq bin Shazlee · Portfolio',
        'tagline' => 'Building AI-enabled mobile and backend systems that scale.',
        'location' => 'Sentul, Kuala Lumpur',
        'email' => 'amirulhaziqshazlee@gmail.com',
        'phone' => '+60175815030',
        'linkedin' => 'https://www.linkedin.com/in/amirulhaziqshazlee',
    ],
    'hero' => [
        'badge' => 'Software Engineering @ UKM',
        'body' => 'I\'m Amirul Haziq bin Shazlee, a Kuala Lumpur-based developer focused on mobile applications, GenAI workflows, and performant backend APIs. I translate research and business goals into reliable software and enjoy leading large-scale student initiatives along the way.',
        'cta_primary' => [
            'label' => 'Email Me',
            'href' => 'mailto:amirulhaziqshazlee@gmail.com',
        ],
        'cta_secondary' => [
            'label' => 'LinkedIn',
            'href' => 'https://www.linkedin.com/in/amirulhaziqshazlee',
            'target' => '_blank',
        ],
        'status_chip' => 'Open to 20-week internships',
    ],
    'stats' => [
        ['value' => '3', 'label' => 'End-to-end shipped products for finance & mobility.'],
        ['value' => '20w', 'label' => 'Internship availability starting June 2025.'],
        ['value' => '2', 'label' => 'National awards for GenAI productivity & volunteer leadership.'],
    ],
    'experience' => [
        [
            'title' => 'Summer Internship · RHB Banking Group',
            'subtitle' => 'Jun 2025 – Aug 2025 · Digital.RHB, Kuala Lumpur',
            'bullets' => [
                'Built an AI documentation assistant with LangChain, FastAPI, Superset, and n8n to summarize developer updates within minutes.',
                'Produced Superset dashboards for productivity tracking and surfaced SonarQube metrics for leadership.',
                'Worked in Agile sprints, strengthening cross-functional collaboration and enterprise integration skills.',
            ],
        ],
    ],
    'projects' => [
        [
            'id' => 'b40-finance',
            'title' => 'Finance Management App for B40 Entrepreneurs',
            'summary' => 'Sep 2025 – Present · Voice-first Android app capturing daily sales for underserved business owners.',
            'bullets' => [
                'Integrated LLM prompts to extract item, quantity, and profit information from speech.',
                'Designed Firestore schema for consolidated daily and monthly summaries.',
                'Crafted workflows tailored to users with limited digital literacy.',
            ],
            'tags' => ['Kotlin', 'Jetpack Compose', 'Firestore', 'GenAI'],
            'repo' => '',
            'demo' => '',
            'case_study' => [
                'problem' => 'Entrepreneurs in the B40 segment often track sales manually, leading to lost data and limited insight into business health.',
                'approach' => 'Designed a mobile-first, voice-driven capture flow and backed it with structured Firestore collections plus LLM parsing pipelines.',
                'results' => 'Early tests showed users recording daily sales in under a minute with far fewer missing entries compared to paper logs.',
                'architecture' => 'Android app (Jetpack Compose) → Speech-to-text → LLM extraction API → Firestore, with scheduled aggregations for monthly reports.',
            ],
        ],
        [
            'id' => 'rental-car',
            'title' => 'Rental Car Mobile Application',
            'summary' => 'Oct 2024 – Jan 2025 · Booking platform with realtime fleet availability.',
            'bullets' => [
                'Implemented secure authentication plus booking calendar and vehicle status tracking.',
                'Collaborated in a team of four, managing shared feature branches and sprint demos.',
                'Improved browsing-to-booking flow with data-informed UI tweaks.',
            ],
            'tags' => ['Flutter', 'Firebase Auth', 'MySQL'],
            'repo' => '',
            'demo' => '',
            'case_study' => [
                'problem' => 'Small rental operators struggled to avoid double-bookings and keep vehicle availability accurate across channels.',
                'approach' => 'Shaped a calendar-based booking experience, real-time availability checks, and simple admin views for fleet updates.',
                'results' => 'Internal testing removed double-bookings and reduced booking confirmation steps for users.',
                'architecture' => 'Flutter client with Firebase Auth and REST APIs backed by a MySQL store for fleet, bookings, and pricing.',
            ],
        ],
    ],
    'skills' => [
        [
            'title' => 'Languages & Frameworks',
            'items' => [
                ['icon' => 'Jv', 'label' => 'Java'],
                ['icon' => 'Py', 'label' => 'Python'],
                ['icon' => 'Kt', 'label' => 'Kotlin'],
                ['icon' => 'Da', 'label' => 'Dart'],
                ['icon' => 'Sw', 'label' => 'Swift'],
                ['icon' => 'PHP', 'label' => 'PHP'],
                ['icon' => 'HTML', 'label' => 'HTML/CSS'],
                ['icon' => 'SQL', 'label' => 'SQL'],
            ],
        ],
        [
            'title' => 'Platforms & Tools',
            'items' => [
                ['icon' => 'JC', 'label' => 'Jetpack Compose'],
                ['icon' => 'FB', 'label' => 'Firebase Auth'],
                ['icon' => 'FA', 'label' => 'FastAPI'],
                ['icon' => 'ST', 'label' => 'Streamlit'],
                ['icon' => 'GH', 'label' => 'Git/GitHub'],
                ['icon' => 'MY', 'label' => 'MySQL'],
                ['icon' => 'FL', 'label' => 'Flutter'],
                ['icon' => 'N8', 'label' => 'n8n'],
                ['icon' => 'SS', 'label' => 'Superset'],
                ['icon' => 'SQ', 'label' => 'SonarQube'],
            ],
        ],
    ],
    'leadership' => [
        [
            'title' => 'Tech Competitions',
            'body' => 'CIMB x Microsoft GenAI Hiring Hackathon 2025 · AWS Jam Malaysia 2025.',
            'bullets' => [
                'Explored Azure AI services, LLM workflows, risk scoring, and cloud troubleshooting.',
            ],
        ],
        [
            'title' => 'PERMAS UKM Vice-President',
            'body' => 'Oct 2024 – Jul 2025 · Led Jejak PERMAS 3.0 logistics, Fusion Arena sports event, and merchandise launches while securing RM1,500 sponsorships.',
        ],
        [
            'title' => 'Graduan Ambassador',
            'body' => 'May 2024 – Nov 2024 · Coordinated 30 buses transporting 1,200 students to Gradun Aspire Career Fair.',
        ],
        [
            'title' => 'Student Executive Council · Sports & Outdoor Recreation',
            'body' => 'Aug 2023 – Jul 2024 · Managed logistics for 400+ athletes across 15 sports during SUKEM.',
        ],
    ],
    'certifications' => [
        [
            'title' => 'App Development with Swift Associate',
            'body' => 'Apple · Aug 2025.',
        ],
        [
            'title' => 'RHB Business Challenge 2025',
            'body' => 'First Runner-Up · GenAI productivity project for Digital Transformation.',
        ],
        [
            'title' => 'ASEAN Youth Volunteer Program 2025',
            'body' => 'Best Facilitator Choice Award for event coordination and engagement.',
            'full' => true,
        ],
    ],
    'additional_experience' => [
        [
            'title' => 'Barista · Skal\' Coff Enterprise',
            'body' => 'Aug 2024 – Present · Elevated service accuracy, speed, and customer satisfaction while mentoring peers.',
        ],
        [
            'title' => 'Crew Trainer · McDonald\'s Shell Jalan Sentul',
            'body' => 'Jul 2022 – Jan 2023 · Coached new hires on quality, food safety, and workflow processes.',
        ],
    ],
    'references' => [
        [
            'name' => 'Mr. Mohd Khairulnizam Md Dahari',
            'role' => 'Section Head - Front-End Engineering, Vice President RHB Banking Group',
            'details' => 'Digital.RHB, Menara Public Gold 2 @ TRX, Level 8, 249, Jln Tun Razak, Imbi, 50400 Kuala Lumpur.',
            'link' => [
                'label' => 'kayrules',
                'href' => 'https://www.linkedin.com/in/kayrules/',
            ],
        ],
        [
            'name' => 'Mr. Arif Zamri',
            'role' => 'Frontend Developer RHB Banking Group',
            'details' => '',
            'link' => [
                'label' => 'arif-zamri',
                'href' => 'https://www.linkedin.com/in/arif-zamri-77b3aa180/',
            ],
        ],
        [
            'name' => 'Ms. Najihah Binti Nazir',
            'role' => 'Event Management Graduan · Biz Connexion Sdn Bhd, Kuala Lumpur',
            'details' => 'Phone: +60 11-2830 9764',
            'full' => true,
        ],
    ],
    'contact' => [
        'intro' => 'Prefer direct messaging? Reach out via email or WhatsApp for internship opportunities, GenAI-driven projects, or collaboration on student initiatives.',
        'actions' => [
            ['label' => 'Email', 'href' => 'mailto:amirulhaziqshazlee@gmail.com'],
            ['label' => 'Call / WhatsApp', 'href' => 'tel:+60175815030'],
        ],
        'details' => [
            ['text' => 'Sentul, Kuala Lumpur · Malay & English'],
            ['text' => 'LinkedIn', 'href' => 'https://www.linkedin.com/in/amirulhaziqshazlee'],
            ['text' => 'Email: amirulhaziqshazlee@gmail.com · Phone: 017-581 5030'],
        ],
    ],
    'timeline' => [
        [
            'year' => '2022',
            'label' => 'Foundations',
            'body' => 'Started Software Engineering at UKM, focused on Java, SQL, and core web technologies.',
        ],
        [
            'year' => '2023',
            'label' => 'Mobile-first',
            'body' => 'Built early Android and Flutter projects and joined large-scale student leadership roles.',
        ],
        [
            'year' => '2024',
            'label' => 'Cloud & Product',
            'body' => 'Integrated Firebase, authentication, and real-time availability for rental car platform.',
        ],
        [
            'year' => '2025',
            'label' => 'GenAI & Data',
            'body' => 'Delivered AI documentation assistant at RHB and explored LangChain, Superset, n8n, and SonarQube.',
        ],
    ],
    'testimonials' => [
        [
            'quote' => '“Testimonial coming soon. Reach out if you need references in the meantime.”',
            'name' => 'Reference updates in progress',
            'role' => 'I’ll publish quotes once approvals are in place.',
        ],
    ],
    'blog' => [
        [
            'title' => 'Designing an AI Documentation Assistant for Developers',
            'date' => 'Coming soon',
            'summary' => 'Deep dive article is in progress. Ping me if you want an early walkthrough.',
            'link' => '',
        ],
        [
            'title' => 'Voice-First UX for B40 Entrepreneurs',
            'date' => 'Coming soon',
            'summary' => 'I’m drafting notes on accessibility lessons from the finance tracker project.',
            'link' => '',
        ],
    ],
];

