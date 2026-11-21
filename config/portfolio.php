<?php

return [
    'name' => '',
    'mark' => 'ADIL ZULHIDAN',
    'role' => 'Software engineer & cyber security',
    'email' => 'zulhidanadil24@gmail.com',
    'cv' => '/cv/cv.pdf', // taruh file CV di public/cv/cv.pdf

    'socials' => [
        ['label' => 'GitHub',     'url' => 'https://github.com/adilzulhidan'],
        ['label' => 'LinkedIn',   'url' => 'https://linkedin.com/in/adilzulhidan'],
        ['label' => 'HackTheBox', 'url' => 'https://app.hackthebox.com/users/adilzulhidan'],
    ],

    'hero' => [
        'title' => "Software that holds\nup under pressure.",
        'subtitle' => 'Built carefully. Broken on purpose.',
        'intro' => 'I build web applications and test them like an attacker would, so what ships is fast, clear and hard to break.',
        'cta' => 'Explore selected work',
        'meta' => ['Selected work / 2026', 'Scroll to discover'],
        'image' => 'images/hero-profile.jpeg',
    ],

    'pov' => [
        'line1' => 'Good code makes things work.',
        'line2' => 'Great engineering makes them',
        'accent' => 'stay safe.',
        'body' => 'My practice lives between development and offense. I design features with the attacker in mind, then prove they hold, from the first commit to the last deploy.',
    ],

    'work' => [
        'title' => 'Systems made for real work.',
        'note' => 'Projects I designed and built independently, from the workflow to the interface.',
        'items' => [
            [
                'name' => 'NasDem Bappilu',
                'ownership' => 'Built independently',
                'tag' => 'Election dashboard / Karawang 2024',
                'headline' => 'Election results, brought into one view.',
                'desc' => 'A dashboard I designed and built for NasDem Bappilu Karawang, bringing together DPRD vote totals, seat counts, dapil recaps, village performance, and election-map navigation.',
                'tags' => ['6 dapil', '30 kecamatan', '309 desa/kel', 'Regional results'],
                'bg' => '#142b4c',
                'preview_bg' => '#edf3fa',
                'image' => 'images/work/bappilu-dashboard.png',
                'image_alt' => 'NasDem Bappilu Karawang 2024 dashboard showing vote totals, DPRD seats, and village-level election results',
            ],
            [
                'name' => 'PT JTEKT Indonesia / ITSM',
                'ownership' => 'Built independently',
                'tag' => 'Web application / IT service management',
                'headline' => 'A clearer path from IT issue to resolution.',
                'desc' => 'A custom ITSM web app I designed and developed during my internship, with a central dashboard, asset management, service ticketing, and tiered approval workflows.',
                'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'PostgreSQL'],
                'bg' => '#151c2e',
                'preview_bg' => '#151c2e',
                'image' => 'images/work/itsm-dashboard.png',
                'image_alt' => 'Dark IT Service Management dashboard for PT JTEKT Indonesia with ticket metrics and service status',
            ],
            [
                'name' => 'SecDetector',
                'ownership' => 'Built independently',
                'tag' => 'Web security / Passive prototype',
                'headline' => 'A clearer first look at web security.',
                'desc' => 'A web security prototype for authorized local and private-lab targets. It makes one passive GET, reviews response headers and page structure, and explores a Siamese one-shot model for URL query parameters. Results need manual validation; the prototype does not actively test SQLi, XSS, IDOR, or CSRF.',
                'tags' => ['Laravel', 'Python / FastAPI', 'Siamese GRU', 'Passive review'],
                'bg' => '#111827',
                'image' => null,
            ],
        ],
    ],

    'expertise' => [
        'title' => "From the threat model\nto the last deploy.",
        'note' => "A focused set of disciplines.\nOne connected engineering perspective.",
        'items' => [
            ['title' => 'Web development', 'desc' => 'Fast, maintainable applications with clean architecture.', 'tags' => ['Laravel', 'PHP', 'APIs', 'Databases']],
            ['title' => 'Application security', 'desc' => 'Secure-by-default code, reviews and hardening.', 'tags' => ['OWASP Top 10', 'Code review', 'Threat modeling']],
            ['title' => 'Penetration testing', 'desc' => 'Find the weak spots first, report them clearly.', 'tags' => ['Web pentest', 'Recon', 'Reporting']],
        ],
    ],

    'about' => [
        'title' => "An IT student.\nA practical\nproblem solver.",
        'photo' => 'images/hero-profile.jpeg',
        'caption' => 'Learning by building, supporting and improving.',
        'paragraphs' => [
            'I’m Adil Zulhidan, an IT student at Universitas Buana Perjuangan Karawang (2024–2028). My experience spans IT support, web and mobile applications, and hardware.',
            'I’ve supported IT work at DPRD Kabupaten Karawang and interned at PT JTEKT Indonesia, where I worked on a ticketing system and IT service management. I’m continuing to build my skills in web programming, software architecture, project and team management, and networking.',
        ],
        'signature' => 'Adil.',
    ],

    'resume' => [
        'title' => 'IT experience built through real work.',
        'summary' => 'An active student at Universitas Buana Perjuangan Karawang with work and internship experience in IT, including web and mobile application development and hardware support.',
        'experience' => [
            [
                'period' => 'Oct 2025 — Present',
                'role' => 'IT Staff',
                'org' => 'DPRD Kabupaten Karawang',
                'desc' => 'IT staff for Commission III and the NasDem Party Bappilu team.',
            ],
            [
                'period' => 'Nov 2025 — Feb 2026',
                'role' => 'IT Support Intern',
                'org' => 'PT JTEKT Indonesia',
                'desc' => 'Created a ticketing system and supported IT service management.',
            ],
            [
                'period' => 'Jul 2025 — Oct 2025',
                'role' => 'Staff to Deputy Chair II',
                'org' => 'DPRD Kabupaten Karawang',
                'desc' => 'Supported the office of the Deputy Chair II.',
            ],
        ],
        'education' => [
            ['period' => '2024 — 2028', 'title' => 'Student', 'org' => 'Universitas Buana Perjuangan Karawang'],
        ],
        'skills' => [
            'Web programming',
            'Software architecture',
            'Project and team management',
            'Routing and subnetting',
        ],
        'certifications' => [
            ['title' => 'CISCO NETACAD Ethical Hacker', 'org' => 'Cisco Networking Academy'],
            ['title' => 'CCNAv7: Switching, Routing, and Wireless Essentials', 'org' => 'Cisco Networking Academy'],
        ],
    ],

    'certificates' => [
        'title' => 'Proof of practice.',
        'note' => 'A few milestones in security learning, earned hands-on.',
        'items' => [
            [
                'title' => 'Ethical Hacker',
                'issuer' => 'Cisco Networking Academy',
                'date' => '25 Oct 2024',
                'image' => 'images/certificates/ethical-hacker.png',
                'file' => 'certificates/ethical-hacker.pdf',
                'alt' => 'Cisco Networking Academy Ethical Hacker certificate awarded to Adil Zulhidan',
            ],
            [
                'title' => 'Digital Forensic Challenge – Sara Cyber Puzzle',
                'issuer' => 'CyberTask',
                'date' => '16 Oct 2025',
                'result' => '100% score',
                'image' => 'images/certificates/digital-forensic-challenge.png',
                'file' => 'certificates/digital-forensic-challenge.pdf',
                'alt' => 'CyberTask certificate for completing the Digital Forensic Challenge – Sara Cyber Puzzle with a score of 100%',
            ],
        ],
    ],

    'skills' => [
        'title' => 'The toolbox.',
        'note' => 'What I reach for most often.',
        'groups' => [
            ['name' => 'Languages',  'items' => ['PHP', 'JavaScript', 'Python', 'SQL', 'Bash']],
            ['name' => 'Frameworks', 'items' => ['Laravel', 'Livewire', 'Vue', 'Tailwind CSS']],
            ['name' => 'Security',   'items' => ['Burp Suite', 'Nmap', 'Metasploit', 'Wireshark', 'OWASP ZAP']],
            ['name' => 'Platform',   'items' => ['Linux', 'Docker', 'Git', 'Nginx', 'CI/CD']],
        ],
    ],

    'process' => [
        'title' => 'Rigour, with curiosity.',
        'note' => "A clear, collaborative process.\nSecurity from the first step, not the last.",
        'steps' => [
            ['title' => 'Understand the risk.', 'desc' => 'Map the goals, the data and who might want it.', 'tag' => 'Scoping & threat model'],
            ['title' => 'Build it right.', 'desc' => 'Clean, tested code with secure defaults baked in.', 'tag' => 'Design & development'],
            ['title' => 'Try to break it.', 'desc' => 'Attack your own work before someone else does.', 'tag' => 'Testing & review'],
            ['title' => 'Ship and harden.', 'desc' => 'Deploy with monitoring, docs and a clear handoff.', 'tag' => 'Release & maintenance'],
        ],
    ],

    'labs' => [
        'title' => 'No ticket. Just curiosity.',
        'note' => 'CTFs, home labs and experiments that don’t need a reason. Yet.',
        'items' => [
            ['title' => 'Capture the flag', 'tag' => 'CTF'],
            ['title' => 'Home lab', 'tag' => 'Infrastructure'],
            ['title' => 'Write-ups', 'tag' => 'Research'],
        ],
    ],

    'beliefs' => ['Security before launch.', 'Simple over clever.', 'Care in the smallest details.'],

    'contact' => [
        'title' => "Let’s build something\nsecure.",
        'note' => "A short introduction is a good start.\nTell me what you’re building.",
        'status' => 'Open to interesting work',
    ],
];
