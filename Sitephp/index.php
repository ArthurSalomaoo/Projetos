<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthur Salomão</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/menuResponsivo.css">
    <link rel="stylesheet" href="estilos/mediaQuery.css">

</head>
<body>
    <header>
        <nav class="nav-bar">
                <div class="logo">
                    <h1>Arthur</h1>
                </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#sobreMim" class="nav-link">Sobre mim</a></li>
                    <li class="nav-item"><a href="#areaAcademica" class="nav-link">Área Acadêmica</a></li>
                    <li class="nav-item"><a href="#projetos" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>

                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="imagens/menu.svg" alt=""></button>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#sobreMim" class="nav-link">Sobre mim</a></li>
                <li class="nav-item"><a href="#areaAcemica" class="nav-link">Área Acadêmica</a></li>
                <li class="nav-item"><a href="#projetos" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
                <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="gitLinkedin">
            <a href="https://www.linkedin.com/in/arthur-176157231/" target="_blank"><img src="imagens/linkedin.svg" alt="linkedin"></a>
            <a href="https://github.com/ArthurSalomaoo" target="_blank"><img src="imagens/github_.svg" alt="github"></a>
        </div>
        <div id="home" class="saudacoes">
            <div>
                <div class="topicos">
                    <h1>👋Saudações!</h1>
                </div>
                <h2>Arthur Salomão Teixeira Pereira</h2>
                <h3>Desenvolvedor Web</h3>
            </div>

            <div class="links">
                <a href="arquivos/Curriculo.pdf" download="Curriculo.pdf" type="application/pdf">Baixar CV <img src="imagens/ArrowLineDown.svg" alt="iconDownload"></a>
                <div class="botaoWaths">
                    <a href="https://wa.me/5584994394023" target="_blank"><img src="imagens/WhatsappLogo.svg" alt="watsappLogo">Vamos conversar</a>
                </div>
            </div>
        </div>
        <div class="sobreMim" id="sobreMim">
            <div>
                <div class="topicos">
                    <h1>🧐Sobre mim</h1>
                </div>
                <p>
                👋 Olá, sou Arthur, é um prazer ter você aqui. <br>
                    💻Estou estudando programação a mais de um ano e meio, meu primeiro contato com esse mundo foi em maio de 2021, quando começou minhas    aulas  no IFRN. <br>
                    💡Estou interessado em desenvolvimento WEB, e estou atrás da minha primeira oportunidade na área.
                </p>
            </div>

            <div id="areaAcademica" class="areaAcademica">
                <h3>Área Acadêmica</h3>
                <p>2021 - Atualmente</p>
            </div>

            <div class="cursos" style="margin: -5px auto 0 auto;">
                <h3>Curso técnico em Informática</h3>
                <p>
                    Cursando o curso técnico em Informática no Instituto federal do Rio Grande do Norte, Campus São Gonçalo do amarante.
                </p>

                <div class="tempo">
                    <p>4 anos</p><p>Maio/2021 - Dezembro/2024</p>
                </div>
            </div>
            <div class="cursosExtras">
            <h3>Cursos extracurriculaar</h3>
            </div>
            <div class="escolaECursos">
                <div class="cursos">
                    <h3>Curso HTML5 e CSS3 do módulo 1 ao módulo 4</h3>
                    <p>Curso de HTML5 e CSS3, foi o primeiro curso de html e css que eu vi, valeu muito apena, não tem nenhum igual ao guanabara, com esse curso tive uma ótima base de html e css</p>
                    <div class="tempo">
                        <p>...</p><p>Agosto/2022 - Janeiro/2023</p>
                    </div>
                </div>
                <div class="cursos">
                    <h3>Curso de Web Moderno Completo com JavaCript 2022</h3>
                    <p>No momento estou assistindo esse curso, ele envolve HTML5, CSS3, JavaScript, Node, ESNext, Ajax, jQuery, React, VueJs, Angular9, Bootstrap, banco de dados, e vários projetos, e projetos envolvendo o Back-end. <br> <a href="https://www.udemy.com/course/curso-web/" target="_blank">Link do curso</a></p>
                    <div class="tempo">
                        <p>97h 3m</p>   <p>Desembro/2022 - ...</p>
                    </div>
                </div>
                <!--
                <div class="cursos">
                    <h3>Curso de JavaScript e TypeScript do básico ao avançado</h3>
                    <p>Curso de JavaScript e TypeScript, comprei esse curso para ter um aprofundamento maior em JavaCript e também quero aprender TypeScript, nele vou aprender tanto o Front-end e Beck-end.</p>
                    <div class="tempo">
                        <p>146h 4m</p>
                        <p>Janeiro/2023 - Fevereiro/2023</p>
                    </div>
                </div>
                <div class="cursos">
                    <h3>Curso de React.Js e Next.Js Intermediário ao avançado</h3>
                    <p>Curso de React.Js e Next.Js, comprei ele para aprender mais sobre os frameworks, mas talvez eu nem precise.</p>
                    <div class="tempo">
                        <p>92h 48m</p>   <p>Fevereiro/2023 - Março/2023</p>
                    </div>
                </div>
                <div class="cursos">
                    <h3>Curso completo de Design de Interface</h3>
                    <p>Curso de Design, comprei para aprender mais sobre desgn, e criar leyouts para meus projetos e trabalhos futuros.</p>
                    <div class="tempo">
                        <p>20h 55m</p>   <p>Março/2023 - Março/2023</p>
                    </div>
                </div>
            -->
    
            </div>
        </div>

        <div class="projetos" id="projetos">
            <div class="topicos">
                <h1>🔗Portifólio</h1>
            </div>
            <h2>Projetos</h2>
            <div class="displayFlex">

                <div class="projeto">
                    <h3>Rocketflix</h3>
                    <p>Projeto da Rocketseat, nesse projeto utilizei a API do TMDB, não tive muitas dificuldades, o mais chato foi a responsividade.</p>
                    <div>
                        <div>JavaScript</div>
                        <div>HTML</div>
                        <div>CSS</div>
                    </div>
                    <a href="https://arthursalomaoo.github.io/Portifolio/Rocketflix/"><img src="imagens/fotoRocketflix.png" alt="Foto do projeto Rocketflix"></a>
                </div>

                <div class="projeto">
                    <h3>Calculadora</h3>
                    <p>Projeto de uma calculadora básica, o mais interessante nesse projeto é a opção de mudar o tema da página</p>
                    <div>
                        <div>JavaScript</div>
                        <div>HTML</div>
                        <div>CSS</div>
                    </div>
                    <a href="https://arthursalomaoo.github.io/Portifolio/Calculator/"><img src="imagens/fotoCalculadora.png" alt="Foto do projeto da calculadora"></a>
                </div>
                <div class="projeto">
                    <h3>Countdown</h3>
                    <p>Projeto básico de contagem regressiva com JS</p>
                    <div>
                        <div>JavaScript</div>
                        <div>HTML</div>
                        <div>CSS</div>
                    </div>
                    <a href="https://arthursalomaoo.github.io/Portifolio/Countdown/"><img src="imagens/fotoCountdown.png" alt="Foto do projeto Countdown"></a>
                </div>
                <div class="projeto">
                    <h3>Formulario</h3>
                    <p>Projeto para cadrasto de DEVs, não tive muitas dificuldades</p>
                    <div>
                        <div>JavaScript</div>
                        <div>HTML</div>
                        <div>CSS</div>
                    </div>
                    <a href="https://arthursalomaoo.github.io/Portifolio/Formulario/"><img src="imagens/fotoFormulario.png" alt="Foto do projeto Formulario"></a>
                </div>
                <div class="projeto">
                    <h3>Checkout</h3>
                    <p>Formulário feito com Bootstrap, esse é o meu primeiro projeto com essa tecnologia</p>
                    <div>
                        <div>Html</div>
                        <div>Bootstrap</div>

                    </div>
                    <a href="https://arthursalomaoo.github.io/Portifolio/ProjetoBootstrap/ProjetoCheckout/"><img src="imagens/fotoFormsBootstrap.png" alt="Foto do projeto de um Formulario feito com Bootstrap"></a>
                </div>
            </div>
        </div>
        <div class="skills" id="skills">
            <div class="topicos">
                <h1>🧑‍💻Skills</h1>
            </div>
            <div class="divSkills">
                <h2>Tecnologias e habilidades</h2>
                <p>Tenho experiência comas as tech</p>
                <div>
                    <img src="imagens/Javascript.svg" alt="icon do JavaScript">
                    <img src="imagens/HTML5.svg" alt="icon HTML5"><img src="imagens/css.svg" alt="icon CSS">
                    <img src="imagens/GithubRoxo.svg" alt="icon GitHub">
                    <img src="imagens/Shape.svg" alt="icon Git">
                    <img src="imagens/java.svg" alt="icon java">
                    <img src="imagens/Php.png" alt="icon Php">

                </div>
                <!--
                <p>Estou estudando</p>
                <div>
                    <img src="imagens/Vector.svg" alt="icon React.Js"><img src="imagens/TypeScript.svg" alt="icon TypeScrpit"><img src="imagens/Nextjs.svg" alt="icon Next.js">
                </div>-->
            </div>
        </div>
        <div class="contatos" id="contato">
            <div class="topicos">
                <h1>📬contatos</h1>
            </div>
            <h2>Vamos conversar</h2>
            <div class="botaoEmail">
                <div class="links">
                    <div class="botaoWaths">
                        <a href="https://wa.me/5584994394023" target="_blank"><img src="imagens/WhatsappLogo.svg" alt="logo whatsapp"> Vamos conversar</a>
                    </div>
                </div>
                <div class="email" onclick="copiar()">
                    <img src="imagens/PaperPlaneTilt.svg" alt="imagem seta do email">
                    <h3>E-mail:</h3>
                    <p id="email">arthursalomao.dev@gmail.com</p>
                    <img src="imagens/CopySimple.svg" alt="icon para copiar">
                </div>
            </div>
        </div>
        <a href="#" class="voltarTopo">Voltar ao topo <img src="imagens/ArrowUp.svg" alt="Imagem de uma seta para cima"></a>
    </main>

    <footer>
        <div>
            <a href="#"><img src="imagens/linkedin.svg" alt="linkedin"></a>
            <a href="#"><img src="imagens/github_.svg" alt="github"></a>
        </div>
        <p><a href="https://www.figma.com/community/file/1162385628597290713" target="_blank">Copyright © Henrique Sousa · 2022 - Apenas Design</a></p>
    </footer>


    <script src="script.js"></script>

</body>
</html>