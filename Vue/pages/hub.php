<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    

    <link rel="stylesheet" href="../Styles/hub.css" />

    <title>DigiTask- Tableau de bord</title>
  </head>
  <body>
   

    <section id="sidebar">
      <span class="logo">
         <img src="../../public/images/logo.png" alt="">
         <a href="#" class="brand"> DigiTask </a>
      </span>
      <ul class="side-menu top">
        <li class="active">
          <a href="#">
            <i class="bx bx-clipboard"></i>
            <span class="text">Tableau de Bord</span>
          </a>
        </li>
        <li>
          <a href="./projet.php">
            <i class="bx bx-category"></i>
            <span class="text">Projets</span>
          </a>
        </li>
        <li>
          <a href="./tache.php">
            <i class="bx bx-book"></i>
            <span class="text">Taches</span>
          </a>
        </li>
        <li>
          <a href="./employer.php">
            <i class="bx bx-user"></i>
            <span class="text">Employés</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="./compte.php">
            <i class="bx bxs-cog"></i>
            <span class="text">Mon compte</span>
          </a>
        </li>
        <li>
          <a href="../logout.php" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
  

    
    <section id="content">
     
      <nav>
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Projet</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a>
        <a href="#" class="profile">
          <img src="../../public/images/fille.jpg" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Tableau de bord</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Tableau de bord </a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Acceuil</a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Télécharger le PDF</span>
          </a>
        </div>

        <ul class="box-info">
          <li>
            <i class="bx bx-category"></i>
            <span class="text">
              <h3>4</h3>
              <p>Projets</p>
            </span>
          </li>
          <li>
            <i class="bx bx-book"></i>
            <span class="text">
              <h3>12</h3>
              <p>Taches</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3>$2543</h3>
              <p>Caisse</p>
            </span>
          </li>
        </ul>
        
        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Liste des taches recentes</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Employer</th>
                  <th>Date d'asignation</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="../../public/images/fille.jpg" />
                    <p>Madeline Fotso</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status completed">Complet</span></td>
                  <td>
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../../public/images/fille.jpg" />
                    <p>Madeline Fotso</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status pending">En attente</span></td>
                  <td>
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../../public/images/fille.jpg" />
                    <p>Madeline Fotso</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status process">En cours</span></td>
                  <td>
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../../public/images/fille.jpg" />
                    <p>Madeline Fotso</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status pending">En attente</span></td>
                  <td>
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../../public/images/fille.jpg" />
                    <p>Madeline Fotso</p>
                  </td>
                  <td>01-10-2021</td>
                  <td><span class="status completed">Complet</span></td>
                  <td>
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="todo">
            <div class="head">
              <h3>A Faire</h3>
              <i class="bx bx-plus"></i>
              <i class="bx bx-filter"></i>
            </div>
            <ul class="todo-list">
              <li class="completed">
                <p>Verifier le solde</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="completed">
                <p>tache 2</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="not-completed">
                <p>tache 1</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
            </ul>
          </div>
        </div>
      </main>
    
    </section>
    

    <script src="../js/hub.js"></script>
  </body>
</html>
