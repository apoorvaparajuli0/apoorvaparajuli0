<?php 
	$google_script_nonce = base64_encode(random_bytes(64));
	$google_tag_nonce = base64_encode(random_bytes(64));
	$bootstrap_nonce = base64_encode(random_bytes(64));
	$color_theme_nonce = base64_encode(random_bytes(64));
	$clipboard_nonce = base64_encode(random_bytes(64));
	$skill_filter_nonce = base64_encode(random_bytes(64));

	header("X-Frame-Options: SAMEORIGIN");
	header("Cross-Origin-Opener-Policy: same-origin");
	header("Content-Security-Policy: default-src 'self'; script-src 'self' 'nonce-$skill_filter_nonce' 'nonce-$clipboard_nonce' 'nonce-$color_theme_nonce' 'nonce-$google_script_nonce' 'nonce-$google_tag_nonce' 'nonce-$bootstrap_nonce' 'unsafe-inline'; style-src 'self' https://fonts.googleapis.com/ https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/; font-src https://fonts.gstatic.com/; media-src 'self'; base-uri 'self'");
	header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload")
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" 
		content=
		"
		I am a Full Stack Software Engineer with experience working with various web frameworks including 
		Django, Flask, React, Next.js, and more. I have experience integrating third party API's, and
		orchestration tools such as LangChain as well as developing secure robust, and accessible web
		applications.
		"
		/>
		<meta name="keywords" content="Apoorva, Parajuli, Portfolio, Software, Engineering, Full-Stack, Backend, Frontend"/>
		<meta name="author" content="Apoorva Parajuli"/>
		<meta property="og:site_name" content="Apoorva Parajuli's Portfolio"/>
		<meta property="og:title" content="Apoorva Parajuli's Portfolio"/>
		<meta property="og:description" 
		content=
		"
		The portfolio website of Apoorva Parajuli, Full-Stack Software Engineer.
		"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="https://apoorvaparajuli.com"/>
		<meta property="og:image" content="https://apoorvaparajuli.com/assets/me.JPG"/>
		<meta property="og:image:type" content="image/jpg"/>
		<meta property="og:image:alt" content="Apoorva Parajuli..."/>
		<meta property="og:site_name" content="Apoorva's Portfolio"/>
		<meta name="twitter:title" content="Apoorva Parajuli's Portfolio"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:title" content="Apoorva Parajuli's Portfolio"/>
		<meta name="twitter:description" 
		content=
		"
		The portfolio website of Apoorva Parajuli, Full-Stack Software Engineer.
		"/>
		<meta name="twitter:image" content="https://apoorvaparajuli.com/assets/me.JPG"/>
		<meta name="twitter:url" content="https://apoorvaparajuli.com"/>
		<link rel="icon" href="/assets/favicon.ico">
		<link rel="stylesheet" type="text/css" href="/css/index.css" />
		<title>
			Apoorva Parajuli's Portfolio
		</title>    
		<!--Bootstrap Imports-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!--Google Fonts Imports-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Suranna&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
		<!--Bootstrap Scripts-->
		<script <?php echo "nonce=\"$bootstrap_nonce\""; ?> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<!--Rich Results Schema-->
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "ProfilePage",
				"mainEntity": {
					"@type": "Person",
					"name": "Apoorva Parajuli",
					"description": 
					"I am a Full Stack Software Engineer with experience working with various web frameworks including 
					Django, Flask, React, Next.js, and more. I have experience integrating third party API's, and
					orchestration tools such as LangChain as well as developing secure robust, and accessible web
					applications.",
					"image": "https://apoorvaparajuli.com/assets/me.JPG",
					"sameAs": [
					"https://github.com/apoorvaparajuli0",
					"https://linkedin.com/in/apoorva-parajuli"
					]
				}
			}
		</script>
		<!-- My Scripts -->
		 <script <?php echo "nonce=\"$color_theme_nonce\""; ?> async type="module" src="/js/set-preferred-color.js"></script>
		 <script <?php echo "nonce=\"$skill_filter_nonce\""; ?> async type="module" src="/js/set-skill-filter.js"></script>
		 <script <?php echo "nonce=\"$clipboard_nonce\""; ?> async type="module" src="/js/set-clipboard.js"></script>
		<!-- Google tag (gtag.js) -->
		<script <?php echo "nonce=\"$google_tag_nonce\""; ?> async src="https://www.googletagmanager.com/gtag/js?id=G-TCX1SZSLJ4"></script>
		<?php 
		echo "<script nonce=\"$google_script_nonce\">
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-TCX1SZSLJ4');
		</script>";
		?>
	</head>
	<body>
		<noscript><div class="mb-5 container text-center set-text-color">Disabling JavaScript can lead to a shaky experience, with fewer features. For a more user-friendly experience, please enable JavaScript on your web browser.</div></noscript>
		<div itemscope itemtype="https://schema.org/Person" class="container-fluid">
			<div id="top" class="row d-flex justify-content-center ">
				<div class="col-12 col-md-6 img-container d-flex align-items-center justify-content-center">
					<img width="350px" height="350px" itemprop="image" src="/assets/me.JPG" class="img-fluid img-thumbnail rounded-0 self-image" alt="Image of Apoorva Parajuli..."/>
				</div>
				<div class="col-12 col-md-6 text-center mt-3 d-flex align-items-center">
					<main>
						<div class="container-fluid p-0">
							<div class="row">
								<h2 class="fw-bolder apoorva-name set-text-color">
									<span class="name-segment" itemprop="givenName">
										<span class="first-name-eng">Apoorva</span>
									</span> 
									<span class="name-segment last-name" itemprop="familyName">
										<span class="last-name-eng">Parajuli</span>
									</span>
								</h2>
							</div>
							<div class="row">
								<p class="set-text-color contact-info">
									<span class="cursor-pointer text-decoration-underline text-nowrap profile-link ms-1 me-1 mb-2" id="email-link" itemprop="email">apoorvaparajuli0@gmail.com</span> | 
									<a class="text-nowrap profile-link ms-1 me-1 mb-2" rel="noreferrer noopener" target="_blank" href="https://apoorvaparajuli.com/assets/Apoorva_Parajuli_Resume.pdf">My Resumé</a> |
									<span class="cursor-pointer text-decoration-underline text-nowrap profile-link ms-1 me-1 mb-2" id="phone-link" itemprop="telephone">(510) 374-9867</span>
								</p>
							</div>
							<div class="row">
								<div class="col-12 text-center set-text-color">
									<p>_________</p>
								</div>
								<div class="col-12 d-flex justify-content-center">
									<p class="self-bio set-text-color" itemprop="description">
										I am a <span itemprop="jobTitle">Full Stack Software Engineer</span> with a strong foundation 
										in computer science and full stack engineering, including optimizing user readability, 
										experience, and accessibility. I am passionate about leveraging AI-enabled technologies 
										and exploring opportunities in modern application development, including machine learning 
										and prompt engineering, to drive innovative solutions.
									</p>
								</div>
								<div class="col-12 text-center set-text-color">
									<p>_________</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<a target="_blank" rel="noreferrer noopener" class="text-decoration-none" href="https://www.linkedin.com/in/apoorva-parajuli/">
									<svg aria-label="LinkedIn Profile Icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="me-1 cursor-pointer bi bi-linkedin set-text-color" viewBox="0 0 16 16">
										<title>LinkedIn Profile</title>
										<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
									</svg>
									</a>
									<a target="_blank" rel="noreferrer noopener" class="text-decoration-none" href="https://github.com/apoorvaparajuli0">
									<svg aria-label="GitHub Profile Icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="ms-1 cursor-pointer bi bi-github set-text-color" viewBox="0 0 16 16">
										<title>GitHub Profile</title>
										<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
									</svg>
									</a>
								</div>
							</div>
						</div>
					</main>
				</div>
			</div>
			<div id="bottom" class="row text-center mt-5">
				<nav>
					<div class="btn-group btn-group-lg" role="group">
						<a type="button" href="/?show=experience#bottom" class="hover-flash btn 
						<?php if(array_key_exists("show", $_GET) && $_GET['show'] == "experience") { 
							echo "bg-invert text-invert"; 
						} else { 
							echo "set-text-color set-bg-color"; 
						} ?> border-0 border-start border-top border-1 rounded-0 work-section-title">Experience</a>

						<a type="button" href="/#bottom" class="hover-flash btn <?php if(!array_key_exists("show", $_GET)) { 
							echo "bg-invert text-invert"; 
						} else { 
							echo "set-text-color set-bg-color"; 
						} ?> border-0 rounded-0 work-section-title">Projects</a>
						<a type="button" href="/?show=education#bottom" class="hover-flash btn <?php if(array_key_exists("show", $_GET) && $_GET['show'] == "education") { 
							echo "bg-invert text-invert"; 
						} else { 
							echo "set-text-color set-bg-color"; 
						} ?> border-0 border-end border-bottom border-1 rounded-0 work-section-title">Education</a>
					</div>
				</nav>
			</div>
			<?php if(array_key_exists("show", $_GET) && $_GET['show'] == "education"): ?>
				<div class="row work-row d-flex">
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										<img class="mb-1" height="24" width="24" src="/assets/CALTECH_LOGO.ico" alt="..."/>
										Caltech
									</h5>
									<h6 class="degree-type fw-lighter">AI & Machine Learning Bootcamp</h6>
									<h6 class="work-time">April 2025-Present</h6>
									<h6 class="course-work-title">Relevant Coursework...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">Deep Learning W/ Keras & Tensorflow</span>
												<span class="badge skill-badge set-border-color">Machine Learning</span>
												<span class="badge skill-badge set-border-color">Reinforcement Learning</span>
												<span class="badge skill-badge set-border-color">Advanced Generative AI</span>
												<span class="badge skill-badge set-border-color">NLP & Speech Recognition</span>
												<span class="badge skill-badge set-border-color">ADL & Computer Vision</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://www.caltech.edu/">Website</a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										<img class="mb-1" height="24" width="24" src="/assets/USFCA_LOGO.ico" alt="..."/>
										University of San Francisco
									</h5>
									<h6 class="degree-type fw-lighter">B.S. in Computer Science</h6>
									<h6 class="work-time">August 2021-August 2023</h6>
									<h6 class="course-work-title">Relevant Coursework...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">Computer Architecture</span>
												<span class="badge skill-badge set-border-color">Operating Systems</span>
												<span class="badge skill-badge set-border-color">Programming Languages</span>
												<span class="badge skill-badge set-border-color">Machine Learning</span>
												<span class="badge skill-badge set-border-color">C & Systems Programming</span>
												<span class="badge skill-badge set-border-color">Data Structures & Algorithms</span>
												<span class="badge skill-badge set-border-color">Multivariable Calculus</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://www.usfca.edu/">Website</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			<?php elseif(array_key_exists("show", $_GET) && $_GET['show'] == "experience"): ?>
				<div class="row work-row d-flex">
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										<img class="mb-1" height="24" width="24" src="/assets/POLYPINION_LOGO.ico" alt="..."/>
										Polypinion
									</h5>
									<h6 class="work-time">April 2024-October 2024</h6>
									<ul class="work-description">
										<li>
											Developed an AI-enabled fact checker that facilitated the process of reading 
											through news articles and parsing truth from fiction using OpenAI’s LLM and 
											Anthropic’s ClaudeAPI LLM
										</li>
										<li>
											Developed a dashboard that utilized  Google’s Analytics API and displayed metrics 
											that allowed admins to view consumer insights including the usage rate of the site 
											and determine the most popular articles, etc. using Chart.js
										</li>
										<li>
											Deployed application and resolved various deployment issues caused by web server 
											and application server configuration
										</li>
										<li>
											Leveraged SEO optimization tools such as schema.org, google lighthouse, search 
											console, as well as react-helmet to designate unique meta tags for each individual 
											page in the form of a helmet component
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">React.js</span>
												<span class="badge skill-badge set-border-color">Flask</span>
												<span class="badge skill-badge set-border-color">SwiftUI</span>
												<span class="badge skill-badge set-border-color">PostgreSQL</span>
												<span class="badge skill-badge set-border-color">Python</span>
												<span class="badge skill-badge set-border-color">JavaScript</span>
												<span class="badge skill-badge set-border-color">Swift</span>
												<span class="badge skill-badge set-border-color">nginx</span>
												<span class="badge skill-badge set-border-color">AWS</span>
												<span class="badge skill-badge set-border-color">Vercel</span>
												<span class="badge skill-badge set-border-color">OpenAI</span>
												<span class="badge skill-badge set-border-color">ClaudeAPI</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://polypinion.com">Web App</a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-0 p-md-3">
						<div class="card work-cards">
							<div class="card-body set-text-color">
								<h5 class="card-title">NCRHUB</h5>
								<h6 class="work-time">August 2023-Present</h6>
								<ul class="work-description">
									<li>
										Integrated third party Map and Geocoding API’s such as Leaflet and OpenStreetMap to provide a map interface for users looking
										for resources, as well as a real-time filter and search feature
									</li>
									<li>
										Used LangChain/LangGraph for LLM/Embedding Model orchestration to allow users to query the resource database via a RAGpowered 
									chat bot, and used LangSmith for debugging and tracing
									</li>
									<li>
										Leveraged many different security strategies, such as COOP, CSP, and HSTS to improve application resilience to XSS attacks. As
										well as rate-limiting API requests and HTML sanitization when rendering
									</li>
									<li>
										Took advantage of SEO optimization tools such as Next.js’ Metadata feature which programmatically generates meta tags for
										pages, including open graph tags, twitter tags, page titles, etc. As well as robots.txt and sitemaps. Also used Google Search
										Console and Vercel for analytics and Lighthouse for web optimization
									</li>
									<li>
										Used devtools such as the axe devtools extension to improve site accessibility as per WCAG and ADA standards
									</li>
									<li>
										Used authentication flows such OIDC for client app authentication and regular JWT authentication for user authentication
									</li>
									<li>
										Leveraged Next.js’ and Django’s built-in tools to support caching, memoization, data serialization and more.
									</li>
								</ul>
								<h6 class="work-skills-title">Skills Used...</h6>
								<div class="container-fluid p-0 skills-container">
									<div class="row">
										<div class="col-12 set-text-color">
											<span class="badge skill-badge set-border-color">Next.js</span>
											<span class="badge skill-badge set-border-color">Django</span>
											<span class="badge skill-badge set-border-color">PostgreSQL</span>
											<span class="badge skill-badge set-border-color">Python</span>
											<span class="badge skill-badge set-border-color">JavaScript</span>
											<span class="badge skill-badge set-border-color">SQLAlchemy</span>
											<span class="badge skill-badge set-border-color">nginx</span>
											<span class="badge skill-badge set-border-color">Groq</span>
											<span class="badge skill-badge set-border-color">LangChain</span>
											<span class="badge skill-badge set-border-color">Pinecone</span>
											<span class="badge skill-badge set-border-color">Heroku</span>
											<span class="badge skill-badge set-border-color">Vercel</span>
										</div>
									</div>
								</div>
								<div class="relevant-links mt-5">
									<a target="_blank" href="https://www.ncrhub.org">Web App</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="row work-row d-flex">
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										cpplox
									</h5>
									<h6 class="work-time">March 2024-Present</h6>
									<ul class="work-description">
										<li>
											A WIP progress interpreter with a bytecode & AST implementation. Robert Nystrom's book, "Crafting Interpreters"
											used, but implemented in C++. Additional features beyond the book spec planned
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">C++</span>
												<span class="badge skill-badge set-border-color">CMake</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://github.com/apoorvaparajuli0/cpplox">Repository</a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										Heap Memory Allocator
									</h5>
									<h6 class="work-time">April 2023</h6>
									<ul class="work-description">
										<li>
											An academic project focused on allowing for shared memory between processes within
											the xv6 operating system. Used gdb-multiarch to debug and QEMU to run the OS.
										</li>
										<li>
											Manipulated the virtual memory mapping system in the OS to point a segment of two processes'
											virtual memory at the same physical memory, allowing for shared data.
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">C</span>
												<span class="badge skill-badge set-border-color">QEMU</span>
												<span class="badge skill-badge set-border-color">xv6</span>
												<span class="badge skill-badge set-border-color">Makefile</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										Inter-Process Shared Memory
									</h5>
									<h6 class="work-time">February 2023-March 2023</h6>
									<ul class="work-description">
										<li>
											Another academic project, where we reimplemented malloc() in the xv6 operating system to use a 
											doubly-linked list implementation of memory rather than a singly-linked list
										</li>
										<li>
											Allowed for conservative memory usage, preventing sbrk() from being called to allocate further 
											memory if previous memory blocks could fit whatever needs to be allocated
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">C</span>
												<span class="badge skill-badge set-border-color">QEMU</span>
												<span class="badge skill-badge set-border-color">xv6</span>
												<span class="badge skill-badge set-border-color">Makefile</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										Master Class Project
									</h5>
									<h6 class="work-time">January 2023-June 2023</h6>
									<ul class="work-description">
										<li>
											The capstone web application project at my university. Built as a Node.js/Express/Next.js stack
											with a PostgreSQL database. Contains features such as chat messaging, uploading files to AWS S3, more.
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
											<span class="badge skill-badge set-border-color">Node.js</span>
											<span class="badge skill-badge set-border-color">Express.js</span>
											<span class="badge skill-badge set-border-color">Next.js</span>
											<span class="badge skill-badge set-border-color">JavaScript</span>
											<span class="badge skill-badge set-border-color">PostgreSQL</span>
											<span class="badge skill-badge set-border-color">Vercel</span>
											<span class="badge skill-badge set-border-color">AWS</span>
											<span class="badge skill-badge set-border-color">socket.io</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										Rue
									</h5>
									<h6 class="work-time">August 2021-December 2021</h6>
									<ul class="work-description">
										<li>
											Developed advanced enemy AI, ranged enemy attacks with predictive markers, etc. 
											as well as QOL changes like footsteps that change sounds depending on the floor 
											material
										</li>
										<li>
											Also added more player agency in how they interact with the game world, including zipling, vaulting, physical attacks,
											sliding, etc.
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">Unreal Engine</span>
												<span class="badge skill-badge set-border-color">Blender</span>
												<span class="badge skill-badge set-border-color">Blueprints</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://www.youtube.com/playlist?list=PL9AaHbp8CL9c_1OTU7MulPUvfcQnt5t2_">Progress Videos</a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-12 col-md-6 col-lg-6 p-3">
						<section>
							<div class="card work-cards">
								<div class="card-body set-text-color">
									<h5 class="card-title">
										Killer Karens
									</h5>
									<h6 class="work-time">January 2021-June 2021</h6>
									<ul class="work-description">
										<li>
											Developed a first-person shooter game level in Unreal Engine, that took advantage of the blueprint scripting
											system, ray tracing, behavior trees, and more to create a compelling game environment
										</li>
										<li>
											Features enemies that track and attack the player with physical attacks, shooting mechanics, pickups, dialogue,
											etc.
										</li>
									</ul>
									<h6 class="work-skills-title">Skills Used...</h6>
									<div class="container-fluid p-0">
										<div class="row">
											<div class="col-12 set-text-color">
												<span class="badge skill-badge set-border-color">Unreal Engine</span>
												<span class="badge skill-badge set-border-color">Blender</span>
												<span class="badge skill-badge set-border-color">Blueprints</span>
											</div>
										</div>
									</div>
									<div class="relevant-links mt-5">
										<a target="_blank" href="https://www.youtube.com/playlist?list=PL9AaHbp8CL9c-FYMRF_XWe9SfEAcyKlCQ">Progress Videos</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			<?php endif; ?>
			<div class="bottom-nav-container position-absolute bottom-0 end-0 me-4 mb-4 position-fixed d-flex align-items-end justify-content-center">
				<div class="border border-1 set-border-color bottom-nav set-text-color p-2 d-flex align-items-center justify-content-center rounded-circle bg-dark">
					<a href="#top">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
						</svg>
					</a>
				</div>
				<div class="overflow-hidden color-mode-nav-button border border-1 set-border-color set-text-color p-0 d-flex align-items-center justify-content-center rounded-circle position-fixed bg-dark position-absolute bottom-0 end-0 me-4 mb-4">
					<svg id="light-mode" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="h-100 w-50 hover-flash border-end border-1 set-border-color" viewBox="0 0 16 16">
						<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
					</svg>
					<svg id="dark-mode" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" h-100 w-50 hover-flash" viewBox="0 0 16 16">
						<path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"/>
					</svg>
				</div>
				<!-- <div class="hover-flash border set-border-color border-1 p-0 accessibility-nav-button set-text-color d-flex align-items-center overflow-hidden justify-content-center rounded-circle position-fixed position-absolute bottom-0 end-0 me-4 mb-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
						<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
					</svg>
				</div> -->
			</div>
		</div>
	</body>
</html>