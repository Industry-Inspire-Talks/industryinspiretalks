<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style type="text/css">
    	*{
    		box-sizing: border-box;
    		margin: 0;
    		padding: 0;
    	}
    	.intro{
    		display: flex;
    		justify-content: center;
    		margin-top: 100px;
    	}
    	.heading{
    		padding-top: 70px; 
    	}
    	.heading p{
    		padding-left: 20px;
    	}
    	.heading .btn{
    		margin-left: 60px;
    	}
    	h1{
    		font-size: 54px;
    		font-weight: 700;
    		color: blue;
    		/*text-transform: uppercase;*/
    		margin-left: 30px;
    		margin-top: 10px;
    	}
    	img{
    		margin-left: 150px;
    		width: 650px;
    		height: 450px;

    	}
    	#more{
    		display: none;
    	}
    </style>
</head>
<body>
	<div class="intro">
		<div class="heading">
			<h1>About Us</h1>
			<p>Industry Inspire Talks is a non-profit community started by Omkar Shinde in August 2020. We believe in educating the Students/Working Professionals/Entrepreneurs by providing them guidance from the Industry Experts & helping them to make an impact in their lives by transforming themselves into an Industry-Leader.</p>
			<button type="button" class="btn btn-primary" id="read" onclick="read()">Read More</button>
		</div>
		<img src="/home/aayush/Desktop/about.png">  
	</div>
    <p id="more">
It is a platform where we invite successful people from the industry to share their career journeys. We inspire people in three ways. We have three categories i.e.. Interview Series, Podcasts Series, Career Stories. 'Interview series' involves people who interned at companies & converted that internship opportunity into a full-time offer. 'Podcasts Series' involves people with 5-10 years of Industry Experience who hold big positions at companies like Founder, MD, CEO, Managers, etc. sharing their industry experiences in our series. 'Career Stories' is where we invite people who achieved immeasurable success in their careers with 10+ years of industry experience in a specific industry/company.
We organize Industry Oriented Events/ Industry Webinars/Industry Workshops for our #inspire community which involves speakers from around the globe representing different industries/companies.  This is what we do here, we inspire people to achieve greater heights in their career by helping them connect with successful people from the industry! Your career is our priority!
Our mission is to empower every person on this planet to achieve more in their future careers. Our vision is to inspire people with their stories of hustle & dedication towards their dreams and make an impact in their lives! We are here to connect you with leaders of the industry so you can transform yourself into a leader. Come let's do something for the community. If you are a community person too, this is the place where you truly belong! Join the #Inspire Community!</p>

<script type="text/javascript">
	var btn=document.getElementById("read");
	var content=document.getElementById("more");
	function read(){
		if(content.style.display==="none"){
			content.style.display="block";
		}
	}
</script>
</body>
</html>
