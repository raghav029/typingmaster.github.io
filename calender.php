<!DOCTYPE html>
 <html lang="en">
 <?php 
include "cssjs/css.php";
?>
 <head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .hide {
      display: none;
    }

    .myDIV:hover + .hide {
      display: block;
      color: gray;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <title>BMSIT EVENT CALENDAR</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  
  <!-- <link rel="stylesheet" href="rj.css"> -->
  <!-- <link rel="stylesheet" href="months.css"> -->
  <link rel="stylesheet" href="css/style.css">
 

 </head>
 <body>
  <div id="months pt-0">
    <section class="upcoming-events" id="eventsSection">

      <h2 style="text-align:center">
        UPCOMING EVENT AND THERE LINKS 
      </h2>
      <hr style="margin-left: 200px; margin-right: 200px;" class="mw-100 line" />
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for months -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="timeline pt-5">
              <div class="timeline-container left">
                <div class="timeline-content">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://summerofcode.withgoogle.com/">1. Google Summer Of Code.</a>
                    </p>
                    <div class="hide">Google Summer of Code is a global program focused on introducing students to open
                      source software development. Students work on a 3-month programming project with an open-source
                      organization during their break from university.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://github.com/JIITODC">2. JIIT Open-Source Developers Circle (JODC)</a>
                    </p>
                    <div class="hide">JIIT Month of Code is an online programme by the open-source club of Jaypee
                      Institute of Information Technology, JIIT Noida-128, the JODC, focused on introducing students to
                      open source software development and documentation writing.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.gssoc.tech/">3. GirlScript Summer of Code</a>
                    </p>
                    <div class="hide">GirlScript Summer of Code is the 3 months long Open Source program during summers
                      conducted by GirlScript Foundation, started in 2018, with an aim to help beginners get started
                      with
                      Open Source Development while encouraging diversity.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.outreachy.org/">4. Outreachy</a>
                    </p>
                    <div class="hide">Outreachy provides internships to work in open source and free software. Outreachy
                      internships are open to applicants around the world. Interns work remotely and are not required to
                      move. Interns are paid a stipend of $5,500 USD for the three-month internship. Interns have a $500
                      USD travel stipend to attend conferences or events.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://opencodeiiita.github.io/">5. OpenCode IIITA</a>
                    </p>
                    <div class="hide">OpenCode is a month-long program starting in January for students to start there
                      journey in the world of open source.
                      The Only requirement being an enthusiastic heart to learn.
                    </div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://crosswoc.ieeedtu.in/">6. CrossWoC</a>
                    </p>
                    <div class="hide">CrossWoC is a six-week long opensource event organised by IEEE DTU & IEEE DTU CS, 
                      which gives programmers and innovators an opportunity to bring out their nascent talent and find intriguing 
                      solutions to real-world problems. It provides a platform for developers to dig deeper into their gray matter 
                      and bring out their latent creativity through open source.</div>
                  </div>


                  <div class="time time-1">
                    <h5>January</h5>
                  </div>
                </div>
              </div>

              <div class="timeline-container right">
                <div class="timeline-content">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://careers.google.com/students/engineering-and-technical-internships/">1.
                        STEP(Google)</a>
                    </p>
                    <div class="hide">STEP program is a developmental opportunity for first- and second-year
                      undergraduate
                      students with a passion for technology—especially students from historically underrepresented
                      groups
                      in the field.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://summerofcode.withgoogle.com/">2. Google Summer of Code</a>
                    </p>
                    <div class="hide"> <i>List of accepted mentoring organizations published</i> Google Summer of Code
                      is
                      a global program focused on introducing students to open source software development. Students
                      work
                      on a 3-month programming project with an open-source organization during their break from
                      university.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.openmainframeproject.org/projects/mentorship-program">3. Open Mainframe
                        Project Mentorship Program</a>
                    </p>
                    <div class="hide">The Open Mainframe Project funds mentees to complete projects during the period
                      between semesters in the months of May, June, July, August, and September. Upon successful
                      completion of the mentorship, mentees are invited to present at an industry conference. The Open
                      Mainframe Project funds travel and expenses for mentees.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://research.redhat.com/red-hat-open-source-contest/">4. Red Hat Open Source
                        Contest</a>
                    </p>
                    <div class="hide">Red Hat Open Source Contest is a competition for students during which we want to
                      show students how easy it is to participate in open source projects. Students can also get
                      feedback
                      on their code and get it included in a real project. By participating in the Red Hat Open Source
                      Contest students can win nice prizes.</div>
                  </div>

                  <div class="time time-2">
                    <h5>February</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container left">
                <div class="timeline-content end">

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.codess.net/about-codess/">1. Codess</a>
                    </p>
                    <div class="hide">Codess is a community for female coders initiated by Microsoft and was established
                      to explore ways to promote gender diversity in the engineering field. Since its inception in 2013
                      in
                      London, Codess has been inspiring women in engineering and helping them achieve their professional
                      goals.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://sites.google.com/view/summerofearthengine/home?authuser=0">2. Google Summer of
                        Earth Engine</a>
                    </p>
                    <div class="hide">Google Summer of Earth Engine is a research program for Indian university students
                      &
                      researchers to get a chance to work with leading research organizations in the country working in
                      environment, conservation, water resources and agricultural domains over 3 months of summer on a
                      project and get paid to do so!</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://railsgirlssummerofcode.org/">3. RAILS GIRLS SUMMER OF CODE</a>
                    </p>
                    <div class="hide">RAILS GIRLS SUMMER OF CODE is a global fellowship program for women and non-binary
                      coders. Students receive a three-month scholarship to work on existing Open Source projects and
                      expand their skill set.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://wiki.linuxfoundation.org/lkmp">4. Linux Kernel Mentorship Program</a>
                    </p>
                    <div class="hide">The Linux Kernel Mentorship Program offers a structured remote learning
                      opportunity
                      to aspiring Linux Kernel developers. Experienced Linux Kernel developers and maintainers mentor
                      volunteer mentees and help them become contributors to the Linux Kernel.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.fsf.org/about/staff-and-board">5. Free Software Foundation</a>
                    </p>
                    <div class="hide">This is an educational opportunity to work with the organization that sponsors the
                      GNU Project, publishes the GNU General Public License (GPL), and fights for software freedom.
                    </div>
                  </div>

                  <div class="time time-1">
                    <h5>March</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="timeline pt-5">
              <div class="timeline-container left">
                <div class="timeline-content">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://rare-technologies.com/incubator/#details">1. RARE Technologies Student Incubator
                        Programme</a>
                    </p>
                    <div class="hide">Our student Incubator offers a unique mix of academic mentorship, hand-on project
                      work and technical training. It is a highly selective program where you will be mentored by an
                      industry expert as you develop a pragmatic solution to a real-world problem using machine
                      learning.
                    </div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a
                        href="https://www.igalia.com/2020/02/03/The-2020-Web-Engines-Hackfest-is-happening-in-May.html">2.
                        Igalia Web Engines Hackfest</a>
                    </p>
                    <div class="hide">Igalia has been hosting the Web Engines Hackfest every year since 2009. And every
                      year the event has grown bigger, with an increasing number of participants and broader areas of
                      interest.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://lab.codingblocks.com/boss">3. BOSS - Bountiful Open Source Summer</a>
                    </p>
                    <div class="hide">Each year BOSS teaches hundreds of students coding, programming and software
                      development. Over the past five years (we started off in April 2014), we have helped more than
                      3000
                      students gain expertise in Android, Web, Data Science and more.BOSS 2019 is open to any Indian
                      Student. You could be a student enrolled in any school or a college or university.</div>
                  </div>


                  <div class="time time-4">
                    <h5>April</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container right">
                <div class="timeline-content">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://developers.google.com/season-of-docs">1. Season of Docs</a>
                    </p>
                    <div class="hide">Google Season of Docs is a program giving technical writers an opportunity to
                      contribute to open source projects, by paying them a three month stipend and facilitating
                      connections between writers and projects. As a platform that’s all about supporting the open
                      source
                      community, we think this is fantastic, because a lot of open source projects really need
                      documentation help.</div>

                  </div>

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a
                        href="https://www.esa.int/Enabling_Support/Space_Engineering_Technology/SOCIS_The_ESA_Summer_of_Code_in_Space">2.
                        A Summer of Code in Space</a>
                    </p>
                    <div class="hide">ESA Summer of Code in Space (SOCIS) is a program run by the European Space Agency
                      that focuses on bringing student developers into open source software development for space
                      applications. Students work with a mentoring organization (with potential support from ESA
                      experts)
                      on a 3 month programming project during their summer break.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.oss.kr/en_oss_world_challenage">3. OSS World Challenge</a>
                    </p>
                    <div class="hide">Open Source Software World Challenge is an annual competition hosted by the
                      Ministry
                      of Science, ICT and Future Planning of Korea.Brings together the gems of open source developers to
                      cultivate developing-skills through cooperated projects which will eventually expand the open
                      source
                      minds/spirit and practices among community.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://2020.acmmm.org/index.html">4. ACM MM Open Source Software Competition</a>
                    </p>
                    <div class="hide">The Open Source Software Competition is an important part of the ACM Multimedia
                      program. The competition, now in its 17th edition, is intended to celebrate, encourage and promote
                      the contribution of researchers, software developers and educators to advance the field by
                      providing
                      the community with implementations of codecs, middleware, frameworks, toolkits, libraries,
                      multimedia players, applications, authoring tools, and other multimedia software.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://fellowship.mlh.io/">5. MLH Fellowship</a>
                    </p>
                    <div class="hide">The MLH Fellowship is an internship alternative for software engineers. Instead of
                      working on a project for just one company, you'll contribute to Open Source projects that are used
                      by companies around the world. You'll collaborate with a group of 10 students under the guidance
                      of
                      a professional mentor whose only job is to help you successfully contribute.</div>

                  </div>

                  <div class="time time-5">
                    <h5>May</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container left">
                <div class="timeline-content end">

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://wiki.linuxfoundation.org/lkmp">1. Linux Kernel Mentorship Program</a>
                    </p>
                    <div class="hide">The Linux Kernel Mentorship Program offers a structured remote learning
                      opportunity
                      to aspiring Linux Kernel developers. Experienced Linux Kernel developers and maintainers mentor
                      volunteer mentees and help them become contributors to the Linux Kernel.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.openstack.org/summit/">2. Open Stack Summit</a>
                    </p>
                    <div class="hide">Open Stack Summit gives an opportunity to collaborate directly with the people
                      building and running open source infrastructure using OpenStack, Kubernetes and 30+ other
                      technologies.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a
                        href="https://events.linuxfoundation.org/open-source-summit-north-america/https://events.linuxfoundation.org/open-source-summit-north-america/">3.
                        Open Source Summit</a>
                    </p>
                    <div class="hide">Open Source Summit connects the open source ecosystem under one roof. It’s a
                      unique
                      environment for cross-collaboration between developers, sysadmins, devops, architects and others
                      who
                      are driving technology forward.</div>
                  </div>

                  <div class="time time-4">
                    <h5>June</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="timeline pt-5">
              <div class="timeline-container left">
                <div class="timeline-content">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://alibaba.github.io/">1. Alibaba Summer of Code</a>
                    </p>
                    <div class="hide">The Linux Security Summit (LSS) is a technical forum for collaboration between
                      Linux
                      developers, researchers, and end-users. Its primary aim is to foster community efforts in
                      analyzing
                      and solving Linux security challenges.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://events.linuxfoundation.org/linux-security-summit-north-america/">2. Linux
                        Security Summit</a>
                    </p>
                    <div class="hide"></div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.lfasiallc.cn/cloud-native-open-source-virtual-summit-china/">3. Cloud Native
                        + Open Source Virtual Summit China</a>
                    </p>
                    <div class="hide">Cloud Native + Open Source Virtual Summit China 2020 gathers leading technologists
                      of China’s active open source and cloud native communities to further the education and
                      advancement
                      of cloud native computing and for an immersive digital experience to share learnings, highlight
                      innovation, and discuss emerging trends in microservices architectures and container orchestration
                      with technologies such as Kubernetes, Prometheus, and many more.</div>
                  </div>

                  <div class="time time-6">
                    <h5>July</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container right">
                <div class="timeline-content">

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://hackinout.co/"> 1. InOut Hackathon</a>
                    </p>
                    <div class="hide">InOut prides itself on being India’s biggest community hackathon.Since its
                      inception
                      in 2015, InOut has been a platform where technology leaders and the brightest minds come together
                      to
                      collaborate on building tools that solve real problems.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://wikimania.wikimedia.org/wiki/Wikimania">2. Wikimania Hackathon</a>
                    </p>
                    <div class="hide">Wikimania is the annual conference celebrating all the free knowledge projects
                      hosted by the Wikimedia Foundation with three days of conferences, discussions, meetups, training,
                      and workshops. Hundreds of volunteers and Free Knowledge leaders from around the world gather to
                      discuss issues, report on new projects and approaches, and exchange ideas</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://events.linuxfoundation.org/linux-kernel-maintainer-summit/">3. Linux Kernel
                        Maintainer Summit</a>
                    </p>
                    <div class="hide">The Linux Kernel Maintainer Summit brings together the world's leading core kernel
                      developers to discuss the state of the existing kernel and plan the next development cycle.</div>
                  </div>


                  <div class="time time-2">
                    <h5>August</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container left">
                <div class="timeline-content end">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://codeheat.org/">1. CodeHeat Coding Contest of FOSSASIA</a>
                    </p>
                    <div class="hide">In the Heat of the Code is a coding contest for FOSSASIA projects on GitHub.
                      The contest runs until February. Grand prize winners will be invited to present their work at the
                      FOSSASIA OpenTechSummit in Singapore in March and will get up to 600 SGD in travel funding to
                      attend, plus a free speaker ticket. Other participants will have the chance to win Tshirts, Swag
                      and
                      vouchers to attend Open Tech events in the region and will get certificates of participation.
                    </div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="http://mdg.iitr.ac.in/soc.html"> 2. MDG Season of Code- IIT-R</a>
                    </p>
                    <div class="hide">MDG is an active student group of IIT Roorkee directing its efforts towards
                      creating
                      useful mobile applications and promoting tech-based learning for the same.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://act-w.org/">3. ACT-W: Seattle, Seattle, WA USA</a>
                    </p>
                    <div class="hide">ACT-W 2020 is an action-packed conference where talented womxn and allies can
                      build
                      skills, grow their community, and accelerate their career path.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://events.linuxfoundation.org/open-networking-edge-summit-north-america/">4. Open
                        Networking & Edge Summit</a>
                    </p>
                    <div class="hide">Open Networking & Edge Summit (formerly Open Networking Summit) is the industry’s
                      premier open networking event now expanded to comprehensively cover Edge Computing, Edge Cloud &
                      IoT. Open Networking & Edge Summit (ONES) enables collaborative development and innovation across
                      enterprises, service providers/telcos and cloud providers to shape the future of networking and
                      edge
                      computing.</div>
                  </div>



                  <div class="time time-3">
                    <h5>September</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="timeline pt-5">
              <div class="timeline-container left">
                <div class="timeline-content">

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://hacktoberfest.digitalocean.com/">1. Hacktoberfest</a>
                    </p>
                    <div class="hide">Hacktoberfest is a month-long celebration of open source software run by
                      DigitalOcean and DEV. Hacktoberfest is open to everyone in our global community. To participate,
                      four pull requests must be submitted to public GitHub repositories. You can sign up anytime
                      between
                      October 1 and October 31.</div>

                  </div>

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://in.pycon.org/2020/">2. Pycon</a>
                    </p>
                    <div class="hide">Pycon is the premier conference in India on using and developing the Python
                      programming language.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://wiki.linuxfoundation.org/lkmp">3. Linux Kernel Mentorship Program</a>
                    </p>
                    <div class="hide">The Linux Kernel Mentorship Program offers a structured remote learning
                      opportunity
                      to aspiring Linux Kernel developers. Experienced Linux Kernel developers and maintainers mentor
                      volunteer mentees and help them become contributors to the Linux Kernel.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://halite.io/">4. Halite AI Bot Challenge</a>
                    </p>
                    <div class="hide">Halite is an artificial intelligence challenge, created by Two Sigma. Participants
                      write bots using the programming language of their choice to compete in an original online
                      multiplayer game.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://njackwinterofcode.github.io/">5. NJACK Winter of Code</a>
                    </p>
                    <div class="hide">NJACK Winter of Code is an initiative by NJACK, IIT Patna, targeted at students
                      who
                      have never participated in Free or Open Source Software (FOSS) development before, as well as at
                      those who have already become an expert in Open Source Development and are currently contributing
                      to
                      projects of any domain, say Web, Mobile, Machine Learning, Blockchain, IoT etc.</div>
                  </div>

                  <div class="time time-1">
                    <h5>October</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container right">
                <div class="timeline-content">


                  <div  onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">

                    <p class="description">
                      <a href="https://devscript.tech/woc/">1. DevScript Winter of Code</a>
                    </p>
                    <div class="hide">DevScript Winter of Code is a 3-month long open-source program envisioned by DevScript
                       that helps understand the paradigm of Open Source contribution. It aims to bring students into the world
                        of open source development and see the power of unified problem-solving in real time.</div>
                  </div>

                  <div  onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.ecell.in/esummit/ihack/">2. I_Hack(IIT B)</a>
                    </p>
                    <div class="hide">At I_Hack, we bring together India’s best coders, developers, designers,
                      innovators,
                      creators and entrepreneurs of tomorrow. I_Hack is geared up for those who are passionate about
                      building, designing and innovating. It is a 30 Hr event where the enthusiasts meet, develop and
                      compete in the product prototyping competition.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://events.linuxfoundation.org/kubernetes-contributor-summit-europe/">3. Kubernetes
                        Contributor Summit</a>
                    </p>
                    <div class="hide">It is an event that brings together new and current Kubernetes’ contributors alike
                      to connect and share face-to-face; and serves as an opportunity for existing contributors to help
                      shape the future of community development.</div>
                  </div>

                 
                  <div  onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://swoc.tech/">4. Script Winter of Code</a>
                    </p>
                    <div class="hide">Script Winter of Code is an 3-month long open-source program envisioned by the Script 
                      Foundation. It aims to bring students into the world of open source development and see the power of 
                      unified problem-solving in real time. The students will be guided by experienced mentors throughout their 
                      journey. They will learn the skills essential in the world of programming, all the while developing a deep 
                      appreciation for the world of open-source.</div>
                  </div>


                  <div class="time time-2">
                    <h5>November</h5>
                  </div>
                </div>
              </div>
              <div class="timeline-container left">
                <div class="timeline-content end">
                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://www.sih.gov.in/"> 1. SIH (Smart India Hackathon)</a>
                    </p>
                    <div class="hide">World’s Biggest Hackathon and Open Innovation model, an initiative by Ministry of
                      HRD 4th edition of highly successful.Smart India Hackathon initiative Involves 2 Lakh+ students
                      with
                      57,000+ ideas from 2200+ institutions against 530+ problem statements provided by 120+
                      organizations
                      from across India.</div>

                  </div>

                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://kwoc.kossiitkgp.org/">2. KWoC (Kharagpur Winter of Code)</a>
                    </p>
                    <div class="hide">Kharagpur Winter of Code is a 5-week long online programme for students who are
                      new
                      to open source software development. The programme not only helps students to get involved in open
                      source, but also prepares them for many open source summer programmes; Google Summer of Code being
                      one of them. The program is hosted by Kharagpur Open Source Society an independent student group
                      at
                      IIT Kharagpur, but is open to students of any university.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://season.kde.org/?q=program_home&prg=47">3. KDE Student Programs</a>
                    </p>
                    <div class="hide">Focused on offering an opportunity to anyone (not just enrolled students)
                      contributing to the KDE community, this is a program that is comparable to the well-known Google
                      Summer of Code, with some special differences.</div>
                  </div>


                  <div onmouseenter='enter(this)' onmouseleave='exit(this)' class="myDIV">
                    <p class="description">
                      <a href="https://24pullrequests.com/about">4. 24 Pull Requests</a>
                    </p>
                    <div class="hide">24 Pull Requests goal is to encourage contribution to open source projects during
                      December. The site suggests open projects, highlights tickets that are good for new contributors,
                      provides guides for contributing and promotes good contributions submitted each day.</div>
                  </div>

                  <div class="time time-3">
                    <h5>December</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- Left and right controls -->
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>

  </div>

</script>

  <script src="scroll.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
 </body>
 </html>


 <style>
  /* ............styles1.css.......... */
html {
	scroll-behavior: smooth;
	/* min-height: 100%; */
	min-width: 100%;
	position: relative;
	max-width: 100%;
	overflow-x: hidden;
  }
  
  *:focus{
  outline: 0;
  }
  
  body{
	font-family: 'Comfortaa', cursive;
	font: 400 15px/1.8 Lato, sans-serif;
	color: #777;
  }
  
  a{
	color: #000;
  }
  
  a:hover{
	color: #000;
  }
  
  h1{
	  font-family: 'Righteous', cursive;
	  font-size: 4rem;
	  font-weight: bold;
	  margin:20% 0 1rem 3rem;
	  line-height: 1.5;
  }
  h2{
	font-family: 'Righteous', cursive;
	font-size: 60px;
  }
  
  h3{
	font-family: 'Righteous', cursive;
	font-size: 1.5rem;
	text-align: center;
	color:black;
  
  }
  h4{
	font-family: 'Righteous', cursive;
	font-size: 2rem;
  }
  h5{
	font-family: 'Righteous', cursive;
	text-align: center;
	padding: 5%;
  }
  
  
  /*about*/
  
  h2.abt{
	text-align:center;
	font-size: 3.5rem;
	padding:  8% 0 2%;
	font-family: serif;
  
  }
  
  
  
  .a1{
	font-family: Georgia, serif;
	word-spacing:  1px;
	line-height: 2rem;
	text-align: justify ;
	padding:  2% 12.5% 0 15%;
	margin: auto;
	color: black;
	font-size: 20px;
  
  }
  .a3{
  word-spacing: 1px;
	font-family:Georgia, serif ;
	line-height: 2rem;
	text-align: justify;
	padding:  1% 12.5% 0 15%;
	margin:auto;
  
  
	color: black;
	font-size: 20px;
  
  }
  .a2{
  font-family: Georgia, serif;
  word-spacing: 1px;
  line-height: 2rem;
  text-align: justify;
  margin: auto;
  padding: 1% 12.5% 0 15%;
  color: black;
	font-size: 20px;
  }
  .a4{
	text-align: center;
	margin-top: 2%;
	color: black;
	font-size: 23px;
  }
  
  #para {
	font-size: 35px;
	font-weight: 1500;
  }
	
	#para3 {
	font-size: 35px;
	font-weight: 1400;
  }
  
  
	.cabt{
	  width: 35%;
	  height: 2px;
	  background-color: grey;
	  position: relative;
	  margin: auto;
  
  
	}
	#circle {
	  display: inline-block;
	  vertical-align: middle;
	  width: 20px;
	  height: 20px;
	  background-color: white;
	  border: solid 2px grey;
	  border-radius: 90%;
	  position: absolute;
	  top: -9px;
	  left: calc(50% - 5px);
  
	}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /* header */
  .navbar {
	 font-family: 'Comfortaa', cursive;
	margin-bottom: 0;
	background-color: #0a0a07 ;
	border: 0;
	font-size: 15px ;
	/*font-weight: bold;*/
	/*letter-spacing:3px;*/
	opacity: 0.9;
  }
  .navbar-brand{
	margin-left: 60px;
  }
  .navbar li a, .navbar .navbar-brand {
	color: #d5d5d5 ;
  
  }
  .nav-link{
	color: #ffd633 !important;
  }
  
  .navbar-nav li.active a {
	color: #fff !important;
	background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
	border-color: transparent;
  }
  
  .fab{
	font-size: 50px;
  }
  
  *{
	margin: 0;
	padding: 0;
  }
  .menu-1{
	background: #0a0a07;
  }
  .menu ul{
	list-style: none;
	margin: 0;
	padding: 0;
	text-align: center;
  }
  .menu li{
	display: inline-block;
	margin: 0 15px;
  }
  .menu a{
	font-size: 22px;
	text-transform: uppercase;
	text-decoration: none;
	color: #fff;
	display: block;
	position: relative;
	padding: 4px 0;
  }
  .menu a::before{
	content: "";
	width: 100%;
	height: 4px;
	position: absolute;
	left: 0;
	bottom: 0;
	background: #fff;
	transition: 0.5s transform ease;
	transform: scale3d(0,1,1);
	transform-origin: 0 50%;
  }
  .menu a:hover::before{
	transform: scale3d(1,1,1);
  }
  .menu-1 a::before{
	background: #ffffff;
	transform-origin: 100% 50%;
  }
  .menu-1 a:hover::before{
	transform-origin: 0 50%;
  }
  
  
  
  
  
  
  /* title */
  
  .quotes{
	font-size: 20px;
	margin:7% 5% 5% 5%;
	color: black;
  }
  
  .quotes div{
	overflow: hidden;
	position: relative;
	float: right;
	height: 65px;
  }
  
  .quotes div li {
	color: black;
	font-weight: 700;
	padding: 0 10px;
	height: 45px;
	margin-bottom: 45px;
	display: block;
	text-align: center;
  }
  
  .flip4 {
	-webkit-animation: flip4 10s cubic-bezier(0.23, 1, 0.32, 1.2) infinite;
			animation: flip4 10s cubic-bezier(0.23, 1, 0.32, 1.2) infinite;
  }
  
  @keyframes flip4 {
	0% {
	  margin-top: -360px;
	}
	5% {
	  margin-top: -270px;
	}
	25% {
	  margin-top: -270px;
	}
	30% {
	  margin-top: -180px;
	}
	50% {
	  margin-top: -180px;
	}
	55% {
	  margin-top: -90px;
	}
	75% {
	  margin-top: -90px;
	}
	80% {
	  margin-top: 0px;
	}
	99.99% {
	  margin-top: 0px;
	}
	100% {
	  margin-top: -270px;
	}
  }
  
  .image{
	width: 100%;
	height: 100%;
	position: absolute;
  }
  .roww{
	padding-bottom: 12%;
	flex-wrap: wrap;
	display: flex;
	margin-right: 124px;
  margin-left: -22px;
  }
  
  /* motivation */
  
  
  #info{
	background-color:#FFF;
	text-align: center;
	padding: 5% 12% ;
	position: relative;
	z-index:1;
  }
  
	@media (max-width:995px) {
	  #title{
		text-align: center;
	  }
  
	.image{
	  width:100%;
	  position: static;
	  transform: rotate(0);
	  padding:10% 10% 10% 10%;
  
  
	}
	}
  .p{
	color: black;
	letter-spacing: 2px;
	line-height: 18px;
	margin-right: 10%;
	padding-right: 10%;
  }
  .pa{
	letter-spacing: 2px;
	line-height: 18px;
	margin-left: 10%;
	padding-left: 10%
	color black;
  }
  
  
  .hin{
	font-size: 30px;
	text-align: left;
  }
  .h{
	text-align: right;
	font-size: 30px;
  }
  .s1{
	width: 38%;
	float: left;
	margin-right:   50px;
  }
  .s2{
	width: 40%;
	float: right;
	margin-left:  70px;
  }
  .col1.col2{
	width:  50%;
	margin: 100px auto 100px  auto;
	text-align: left;
  }
  .fa{
  
	color: #ef8172;
	font-size:30px;
  }
  .fa:hover{
	color: #ff4c68;
  }
  /* Months */
  
  
  #months{
	 background-color: #fff;
		  background-size: 400% 400%;
	  font-size: 1.2rem;
	  color: #fff;
		  border-radius: 10px 1px 1px;
		  box-shadow: 10px 10px 5px grey;
   }
  
  #months.li{
	text-align:left;
	margin-left: 50%;
	color: black;
  }
  #months .description,h5,h2{
	color:black;
  }
  
  #months h2{
	font-size:40px;
  }
  .carousel-item{
	padding: 7% 15%;
  }
  
  .x{
	 font-family: 'Comfortaa', cursive;
	font-size: 2.5rem;
	color: #363062;
  }
  
  ul{
	  padding-left:20%;
	  font-family: 'Baloo Da 2', cursive;
	  font-size: 1.2rem;
  
  }
  p:hover{
	color: #1d2323;
  }
  
  
  /* CONTACT */
  .container {
	padding: 80px 120px;
  }
  .form-control {
	border-radius: 0;
  }
  textarea {
	resize: none;
  }
  
  
  .btn {
	padding: 10px 20px;
	background-color: #333;
	color: #f1f1f1;
	border-radius: 0;
	transition: .2s;
  }
  .btn:hover, .btn:focus {
	border: 1px solid #333;
	background-color: #fff;
	color: #000;
  }
  
  
  
  /* footer */
  
  footer {
	background-color: #2d2d30;
	color: #f5f5f5;
	bottom: 0;
	font-size: 1rem;
	position: absolute;
	width: 100%;
  }
  footer a {
	color: #f5f5f5;
  }
  footer a:hover {
	color: #777;
	text-decoration: none;
  }
  .fa{
	  font-size: 20px;
	  padding-left: 1%;
  }
  li > p{
	text-decoration: none;
	color: #111;
	font-family: 'Baloo Da 2', cursive;
	display: block;
	margin: auto;
	position: relative;
	padding: 0 10px 5px;
	box-shadow: inset 0 -0.5em 0 rgba(0, 146, 227, 0.3);
	transition: box-shadow .2s ease-in-out;
  }
  li > p:hover{
	box-shadow: inset 0 -1.5em 0 rgba(0, 146, 227, 0.5)
  }
  .x{
	text-decoration: none;
	color: #363062;
	display: block;
	margin: auto;
	position: relative;
	padding: 0 10px 5px;
	box-shadow: inset 0 -0.5em 0 #25f582;
	transition: box-shadow .2s ease-in-out;
  }
  .x:hover{
	box-shadow: inset 0 -1.5em 0 #25f582;
  }
  
  .logo{
	width: 100px;
	margin-left: 5%;
	margin-bottom: 2%;
  }
  
  .logo img{
	  width: 250px;
	  height: 150px;
  }
  
  .socialmedia{
  
	align-items: center;
	color: yellow;
  }
  
  .flexdisplay{
	display: flex;
	flex-wrap: wrap;
  }
  
  .newsletter{
	margin-left: 50%;
  
  }
  
  .newsletter h3{
	margin-bottom: 5px;
	color: #fff;
	font-size: 30px;
  }
  
  input{
	 border-radius: 30px;
	 min-width: 260px;
	 text-align: center;
  }
  
  .send{
	border-radius: 5%;
	min-width: 100px;
	text-align: center;
	background-color: black;
	color: white;
	border: 2px solid #ffd633;
  }
  
  .send:hover{
	background-color: #ffd633;
  }
  
  .foot{
	color: #ffd633;
  }
  
  .footer-end{
	/*margin-left: 40%;*/
	padding-left: 50%;
	/*padding-right: 50%;*/
  
  }
  
  .scrollup{
	background-color: #ffd633;
	border-radius: 100%;
	color: white;
	width: 50px;
	height: 50px;
	margin-left: 90%;
  }
  
  .scrollup i{
	color: white;
	margin-top: 15px;
  }
  /*content*/
  
  p{
	font-family: 'Poppins';
  }
  .center {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
  }
  #wave{
	width: 100%;
	height: 10px;
  }
  
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
	height: 100px;
	width: 100px;
	outline: black;
	background-size: 100%, 100%;
	border-radius: 50%;
	border: 5px solid black;
	background-image: none;
	border-color: black;
  }
  
  .carousel-control-next-icon:after
  {
	content: '>';
	font-size: 60px;
	color: blue;
	margin-top: -10px;
	display: flex;
	align-content: center;
	justify-content: center;
  }
  
  .carousel-control-prev-icon:after {
	content: '<';
	font-size: 60px;
	color:blue;
	margin-top: -10px;
	display: flex;
	align-content: center;
	justify-content: center;
  }
  
  .time{
	background-color: yellow !important;
  }
  
  
  #scroll{
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	border: none;
	outline: none;
	cursor: pointer;
  
  }
  
  .fa-chevron-up{
	height: 10px;
	width: 10px;
	margin-left: 15px;
	margin-right:10px;
	margin-top: 20px;
	margin-bottom: 20px;
  }
  
  .upper{
	  background-color:black;
	color: #fff;
	margin-top:0;
  
  }
  
  .quote {
	margin: 0;
  }
  
  .quote-text {
	font-family: "Lora";
	font-style: italic;
	letter-spacing: 2px;
  }
  
  .quote-author {
	font-weight: bold;
  }
  
  .quote-notation {
	font-size: 1.3em;
  }
  
  @media (max-width:570px){
	#bottom{
	  padding-top: 2rem;
	}
	#secondfooter{
	  margin-bottom: 3rem;
	  margin-top:-5rem;
	}
	.send{
	  margin-top:0.7rem;
	  margin-bottom:2rem;
	}
	.footer-p{
	  margin-bottom: 0.5rem;
	}
  }
  
  .quote {
	margin: 0;
  }
  
  .quote-text {
	font-family: 'Lora';font-size: 28px;
	letter-spacing: 2px;
	
  }
  
  .quote-author {
	font-weight: bold;
	font-size:20px;
  }
  
  .quote-notation {
	font-size: 1.3em;
  }
  
/* ...........months.css.................................... */
@import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600&family=Comfortaa:wght@400;500;600;700&family=Montserrat:wght@100;300;400;500&family=Quicksand:wght@300;400;500&family=Raleway:wght@300;400;500;600&display=swap');

html {
	font-family: 'Lato', sans-serif;
	-webkit-font-smoothing: antialiased;
	--bg-Card: rgb(250, 250, 250);
	--border: black;
	--box-shadow: 0 3px 8px #323232, 0 4px 0px #323232;
	--line-clr:#323232;
	--line1-clr:#323232;
	--br-clr: #000;
	--card-clr: #323232;
	--time-border: #000;

}
h2{
    font-family: 'Quicksland', sans-serif;
}

body {
	font-family: 'Lato', sans-serif;
	-webkit-font-smoothing: antialiased;
}

.upcoming-events {
	padding-top: 5%;
	background-color: var(--bg1-color);
}

.upcoming-events .container {
	margin-top: 20px;
}

.font-weight-bolder {
	letter-spacing: 1px;
}

.upcoming {
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
}

.upcoming span {
	font-weight: 300;
}

.timeline {
	position: relative;
	max-width: 1200px;
	margin: 0 auto;
}

.timeline::after {
	content: '';
	position: absolute;
	width: 6px;
	background-color: var(--line-clr);
	top: 0;
	bottom: 0;
	left: 50%;
	margin-left: -3px;
	border-radius: 300px;
}

.timeline-container {
	padding: 10px 40px;
	position: relative;
	background-color: inherit;
	width: 50%;
}

.timeline-container::after {
	content: '';
	position: absolute;
	width: 30px;
	height: 30px;
	right: -16px;
	background-color: var(--line-clr);
	border: 4px solid var(--line-clr);
	top: 15px;
	border-radius: 50%;
	z-index: 1;
}

.left {
	left: 0;
}

.right {
	left: 50%;
}

.left::before {
	content: ' ';
	height: 0;
	position: absolute;
	top: 22px;
	width: 0;
	z-index: 1;
	right: 30px;
	border: medium solid white;
	border-width: 10px 0 10px 10px;
	border-color: transparent transparent transparent var(--line-clr);
}

.right::before {
	content: ' ';
	height: 0;
	position: absolute;
	top: 22px;
	width: 0;
	z-index: 1;
	left: 30px;
	border: medium solid white;
	border-width: 10px 10px 10px 0;
	border-color: transparent var(--line-clr) transparent transparent;
}

.right::after {
	left: -16px;
}

.timeline-content {
	padding: 20px 30px;
	background-color: var(--bg2-color);
	position: relative;
	border-radius: 6px;
	-webkit-box-shadow: var(--box-shadow);
	box-shadow: var(--box-shadow);
}

.time {
	position: absolute;
	top: 2px;
	margin: 0;
	padding: 4px 12px;
	border: 1px solid var(--border);
	z-index: 5;
	border-radius: 18px;
	-webkit-transition: 300ms linear;
	-o-transition: 300ms linear;
	transition: 300ms linear;
	background-color: var(--box-clr);
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

@media screen and (min-width: 770px) {
	.time-1 {
		right: -170px;
	}

	.time-2 {
		left: -200px;
	}

	.time-3{
		right: -200px;
	}

	.time-4{
		right: -160px;
	}

	.time-5{
		left: -170px;
	}

	.time-6{
		right: -150px;
	}
}

.timeline-content p,
h3,
h5 {
	font-family: 'Quicksand', sans-serif;
}

/* Making Timeline Responsive */

@media screen and (max-width: 770px) {
	.timeline::after {
		left: 31px;
	}

	.timeline-container {
		width: 100%;
		padding-left: 70px;
		padding-right: 25px;
	}

	.timeline-container::before {
		left: 60px;
		border-width: 10px 10px 10px 0;
	}

	.left::after,
	.right::after {
		left: 15px;
	}

	.left::before {
		border-width: 10px 10px 10px 0;
		border-color: transparent var(--line-clr) transparent transparent;
	}

	.right {
		left: 0%;
	}

	.time {
		border: none;
		position: relative;
		width: 175px;
		margin: 10px auto;
	}
	.time h5 {
		font-size: 20px;
	}
	.time-1 {
		right: 215px;
	}
	.time-2 {
		left: -215px;
	}
}
@media screen and (max-width: 760px){
	.time {
		border: 1px solid var(--time-border);
	}
}


@media screen and (max-width: 767px) {
	.time-1 {
		right: 125px;
	}
	.time-2 {
		left: -125px;
	}
}
@media screen and (max-width: 560px) {
	.time-1 {
		right: 0px;
	}
	.time-2 {
		left: 0px;
	}
}

@media screen and (max-width: 395px) {
	.time {
		position: relative;
		max-width: 95%;
		margin: 10px;
	}

	.timeline-content {
		padding: 7px 12px;
		position: relative;
	}

	.timeline-content h3 {
		font-size: 25px;
	}

	.timeline-content p {
		font-size: 15px;
	}

	.timeline-container {
		width: 100%;
		padding-left: 57px;
		padding-right: 5px;
		padding-bottom: 30px;
	}
}

.line {
	background-color: var(--br-clr);
	border-top: 0.5px solid rgba(0, 0, 0, 0.1);
}

.line1{
	margin-top: 0.5rem; 
	margin-bottom: 0.75rem; 
	background-color: var(--line1-clr);
}

.description {
	letter-spacing: 0.5px;
	color: var(--font-color);
}

@media only screen and (max-width: 1199px) {
	.font-weight-bolder {
		text-align: center;
	}
	.timeline-content h3 {
		font-size: 24px;
		text-align: center;
	}
}
@media only screen and (max-width: 991px) {
	.timeline-content h3 {
		font-size: 20px;
	}
	.description {
		font-size: 15px;
	}
	
	.time {
		-webkit-transform: scale(0.8);
		-ms-transform: scale(0.8);
		transform: scale(0.8);
	}

}

@media screen and (max-width: 396px) {
	.timeline-container::before {
		left: 46px;
	}
	.time {
		margin: auto;
	}
}

@media screen and (max-width: 403px) and (min-width: 396) {
	.timeline-container::before {
		left: 60px;
	}
}

@media (max-width:560px){
	.end{
		margin-bottom: 7rem;
	}
}

@media only screen and (max-width: 980px){
	.col-sm .logo.center{
		width: 60%;
		margin: auto auto;
	}
	#bottom{
		position: absolute;
		left: 0;
		bottom: 0;
		background-color: #000;
	}
	.col-sm .logo.center{
		margin-top: 10%;
	}
	.col-sm .newsletter{
		margin: 6% 0 6% 0;
	}
}

@media only screen and (max-width: 890px) and (min-width: 676px){
	.col-sm .logo.center img{
	height:160px;
	width: 250px;
    margin-top: 14%;
    margin-left: -22%;
    padding-right: 20%
	}
	footer{
		margin-top: 10px;
	}
	.timeline-content{
		padding-bottom: 1rem;
	}
}

@media only screen and (max-width: 576px) and (min-width: 560px){
	.timeline-container.left{
		padding-bottom: 100px;
	}
	#bottom{
		padding-top: 0;
	}
}
@media only screen and (max-width: 564px){
	.socialmedia.center{
		margin-top: 2rem;
	}
}

@media only screen and (max-width: 560px){
	.flexdisplay .row.container-fluid{
		margin-top: -10%;
	}

}

/* ................rj.css............. */
/* ................Footer............. */

footer {
  width:100vw;
background-color: black; 
  bottom:0px
}
footer div {

  margin: -5px 0px 0px 0px;
  padding:0px;

  text-align:center;
}
svg {
  width:100%;
  overflow:visible;
}

.wave {
  animation: wave 3s linear;
  animation-iteration-count:infinite;
  fill: black;
}

#wave2 {
  animation-duration:5s;
  animation-direction: reverse;
  opacity: .6
}
#wave3 {
  animation-duration: 7s;
  opacity:.3;
}
@keyframes wave {
  to {transform: translateX(-100%);}
}
.inputdata {
  width: 100%;
} 

 </style>
 <p id="spam"></p>

 <script>
  window.addEventListener('load', () => {
    const quotes = [
        "“You can’t connect the dots looking forward; you can only connect them looking backward. So you have to trust that the dots will somehow connect in your future.”",
        "“Your time is limited, so don’t waste it living someone else’s life.”",
        "“Don’t let the noise of others’ opinions drown out your own inner voice.”",
        "“Have the courage to follow your heart and intuition. They somehow already know what you truly want to become.”",
        "“Stay hungry. Stay foolish.”",
        "“If today were the last day of your life, would you want to do what you are about to do today?”",
        "“I think the things you regret most in life are the things you didn’t do.”",
        "“Remembering that you are going to die is the best way I know to avoid the trap of thinking you have something to lose.”",
        "“We’re here to put a dent in the universe. Otherwise why else even be here?”",
        "“Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.”",
        "“My favorite things in life don’t cost any money. It’s really clear that the most precious resource we all have is time.”",
        "“I’m convinced that about half of what separates successful entrepreneurs from the non-successful ones is pure perseverance.”",
        "“Innovation distinguishes between a leader and a follower.”",
        "“I think if you do something and it turns out pretty good, then you should go do something else wonderful, not dwell on it for too long. Just figure out what’s next.”",
    ];
    
    document.querySelector('.quote-text').textContent = quotes[Math.floor(Math.random() * Math.floor(quotes.length))];
});

 </script>
 <?php
include "includes/footer.php";
?>
 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<?php
  include "cssjs/js.php";

  ?>
<!-- <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">Offering Reliable Hosting</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4">Exceptional Web Solutions</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">Help Our Customer</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">FAQS</span>
            <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
          </div>
        </div>  
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">When she reached the first hills? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menuone" class="collapse show">
						          <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-6 col-lg-3 ftco-animate">
                                        <div class="destination">
                                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-1.jpg);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <h3><a href="#">Luxury Restaurant</a></h3>
                                                <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <span>8 Rating</span>
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                                    <span class="ml-auto"><a href="#">Discover</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 ftco-animate">
                                        <div class="destination">
                                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-2.jpg);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <h3><a href="#">Luxury Restaurant</a></h3>
                                                <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <span>8 Rating</span>
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                                    <span class="ml-auto"><a href="#">Book Now</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 ftco-animate">
                                        <div class="destination">
                                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-3.jpg);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <h3><a href="#">Luxury Restaurant</a></h3>
                                                <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <span>8 Rating</span>
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                                    <span class="ml-auto"><a href="#">Book Now</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 ftco-animate">
                                        <div class="destination">
                                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-4.jpg);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <h3><a href="#">Luxury Restaurant</a></h3>
                                                <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <span>8 Rating</span>
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                                    <span class="ml-auto"><a href="#">Book Now</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Italic Mountains, she had a last <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menutwo" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3"> Bookmarksgrove, the headline? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu3" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>

    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">Alphabet Village and the subline of her own? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu4" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">Then she continued her way? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu5" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">Skyline of her hometown Bookmarksgrove? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu6" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
 -->