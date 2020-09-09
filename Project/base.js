window.onload = function() {
const param=(new URL(document.location)).searchParams;
var dept=param.get('dept');
var course_nm=param.get('course_nm')
var co_1=param.get('co1')
var co_2=param.get('co2')
var co_3=param.get('co3')
var co_4=param.get('co4')
    createPSO(dept);
function createPSO(i){
        if(i=="MECH"){
        	i="1. Graduates will exhibit the ability to analyze and solve problems in Design, Thermal, Manufacturing and Renewable energy domains.<br>2. Graduates will incorporate technical and professional skills in their career.";

        }else if(i=="IT"){
        	i="1. Apply and implement IT solutions in allied fields of engineering to solve real word problems.<br>2. Identify social and industrial problems, provide creative solutions and become quality asset for society and industry.<br>3. Deploy secured solution using Information Technology practices and strategies.";

        }else if(i=="EXTC"){
        	i="1. To apply the knowledge of Electronics and Communication to analyse, design and implement application specific problems with modern tools.<br>2. Adapt emerging technologies with continuous learning in the field of electronics and telecommunication engineering with appropriate solutions to real life problems.";

        }else if(i=="CS"){
        	i="1. Analyze problems and design applications of database, networking, security, web technology, cloud computing, machine learning using mathematical skills and computational tools<br>2. Develop computer-based systems to provide solutions for organizational, societal  problems by working in multidisciplinary teams and pursue a career in IT industry ";


        }
        else if(i=="INSTRU"){
        	i="1. Apply fundamentals of applied sciences, engineering mathematics, electrical, electronics, measurements and control to work as a successful professional in automation as well as interdisciplinary fields.<br>2. Demonstrate professional ethics and standards, effective communication skills and team work to solve real-world problems.";


        }
        else if(i=="CIVIL"){
        		i="1. Proficiency in Civil Engineering: Apply knowledge of mathematics and physical science with higher proficiency in the core areas of civil engineering fields.<br>2. Analytical and Executive Skill: Develop a plan, drawings, analyze, design, write specification, prepare cost estimates and perform all kinds of civil engineering activities.<br>3. Application of Technology at the frontiers of knowledge: Encourage for the application of modern engineering tools and multidisciplinary concept to solve civil engineering problems and research.<br>4. Responsibility: Provide sustainable solutions to complex civil engineering problems for the development of nation and society.";


        	}else{
        		true;
        	}

        document.getElementById("pso").innerHTML = i;

}
}