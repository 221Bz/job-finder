<x-app-layout>
    <div class="bg-cover bg-center p-5 rounded mb-0" style="background-color: #021024;">
        <h1 class="text-5xl font-black text-white mb-2 transition-transform duration-200 hover:scale-105">
            {{ __('About Us') }}
        </h1>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; line-height: 1.6; color: white;">
            <p><b>JobFinder</b> is dedicated to bridging the gap between job seekers and employers through a cutting-edge job search information system. Our platform simplifies the job search process by offering an intuitive way to explore career opportunities.</p>
            <p>We empower individuals with the tools and resources to find meaningful employment. With advanced search algorithms and updated listings, users access the most relevant job openings across industries.</p>
            <p>Our team values innovation, user experience, and continuous improvement. Whether you're starting out or growing your career, <b>JobFinder</b> supports you every step of the way.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-5 lg:px-5 justify-center">
            <div class="p-6 text-gray-900">
                <style>
                    .team-container {
                                display: flex;
                                justify-content: center;
                                gap: 5%;
                                flex-wrap: wrap;
                                margin-top: 20px;
                                margin-bottom: 20px;
                        }

                    .team-container .round:hover {
                                box-shadow: 0 8px 16px rgba(27, 42, 73, 0.5);
                                transform: scale(1.05);
                                transition: transform 0.3s ease, box-shadow 0.3s ease;
                                cursor: pointer;
                        }

                    .text-center a:hover {
                                color: #1B2A49 !important;
                                transition: color 0.3s ease;
                        }

                    .round {
                                background-color: #ffff;
                                border-radius: 5px;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px;
                                border: 2px solid #1B2A49;
                                width: 25%;
                                float: left;
                                margin: 0 1% 0% 0;
                                height: 175px;
                                font-style: bold;
                                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                                -webkit-transition: width 1s ease-in-out;
                                -o-transition: width 1s ease-in-out;
                                -moz-transition: width 1s ease-in-out;
                                transition: width 1s ease-in-out;
                            }

                            .round2 {
                                background-color: #021024;
                                border-radius: 5px;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px;
                                border: 2px solid #1B2A49;
                                width: 5%;
                                float: left;
                                margin: 0 1% 0% 0;
                                height: 175px;
                                font-style: bold;
                                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                                -webkit-transition: width 1s ease-in-out;
                                -o-transition: width 1s ease-in-out;
                                -moz-transition: width 1s ease-in-out;
                                transition: width 1s ease-in-out;
                            }
                </style>

    <div class="bg-cover bg-center p-5 rounded mb-0" style="background-color: #FFFFFF;">
        <div class="text-2xl font-black" style="color: #1C3D84;">
            <span>Meet the minds driving innovation</span><br>
            <span>and excellence behind JobFinder.</span>
        </div>

        <div class="team-container">
            <!-- Layla -->
            <div class="round" style="display: flex; flex-direction: column; align-items: center; line-height: 1.2;">
                <img src="{{ asset('images/layla.jpg') }}" alt="Layla Nur Fitria" style="width: 75px; height: 75px; border-radius: 50%; margin-top: 12px; margin-bottom: 12px;">
                <span><b>Layla Nur Fitria</b></span>
                <span style="color: blue;">Front End Developer</span>
            </div>

            <!-- Alfin -->
            <div class="round" style="display: flex; flex-direction: column; align-items: center; line-height: 1.2;">
                <img src="{{ asset('images/alfin.jpg') }}" alt="Moh Alfin Ridwan" style="width: 75px; height: 75px; border-radius: 50%; margin-top: 12px; margin-bottom: 12px;">
                <span><b>Moh Alfin Ridwan</b></span>
                <span style="color: blue;">Back End Developer</span>
            </div>

            <!-- Regata -->
            <div class="round" style="display: flex; flex-direction: column; align-items: center; line-height: 1.2;">
                <img src="{{ asset('images/regata.jpg') }}" alt="Regata Delavin Abirama" style="width: 75px; height: 75px; border-radius: 50%; margin-top: 12px; margin-bottom: 12px;">
                <span><b>Regata Delavin Abirama</b></span>
                <span style="color: blue;">UI/UX Designer</span>
            </div>

            <!-- Sosial Media -->
            <div class="round2 " style="display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px;">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
                <a href="https://instagram.com/yourusername" target="_blank" style="color: white;" class="transition-transform duration-200 hover:scale-105">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://x.com/yourusername" target="_blank" style="color: white;" class="transition-transform duration-200 hover:scale-105">
                    <i class="fab fa-x-twitter fa-lg"></i>
                </a>
                <a href="mailto:youremail@example.com" style="color: white;" class="transition-transform duration-200 hover:scale-105">
                    <i class="fas fa-envelope fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>