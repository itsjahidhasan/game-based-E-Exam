<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ExamCare | Set Question</title>
    <link
      rel="icon"
      href="../../asset/img/logo-website.svg"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      input[type="text"] {
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        margin-bottom: 2vw;
      }
      input[type="submit"] {
        width: 30%;

        padding: 16px 20px;
        border: 3px solid;
        border-radius: 4px;
        border-color: #14cf53;
        background-color: #f1f1f1;
        margin-bottom: 2vw;
      }
      input[type="submit"]:hover {
        border-color: #14cf91;
        background-color: #12ca5f;
      }
      .qut {
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        margin-bottom: 2vw;
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="m-4">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img
              src="../../asset/img/logo-website.svg"
              height="28"
              alt="ExamCare"
            />
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <a href="./home.html" class="nav-item nav-link">Home</a>
              <a href="./profile.html" class="nav-item nav-link">Profile</a>
              <a href="./question.php" class="nav-item nav-link active"
                >Create Question</a
              >
            </div>
            <div class="navbar-nav ms-auto">
              <a href="../../controller/logout.php" class="nav-item nav-link"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div style="width: 30vw; margin: 3vw 35vw 3vw 35vw">
      <form action="../../controller/test/checkTestType.php" method="post">
        <div id="queId">
          <input type="text" name="queId" id="" placeholder="Question ID" />
        </div>
        <div class="qut">
        <span style="font-size:18px">Select Question Type:</span>
        <div 
          style="display: flex; align-items: center; justify-content: center"
        >
        
        
          <div
            
            class="form-check"
            style="float: left; margin-right: 3vw"
          >
            <input
              type="radio"
              name="testType"
              id=""
              value="game"
              class="form-check-input"
            />
            <label class="form-check-label">Game Based</label>
          </div>
          <div  class="form-check" style="float: left">
            <input
              type="radio"
              name="testType"
              id=""
              value="general"
              class="form-check-input"
            />
            <label class="form-check-label">General</label>
          </div>
        </div>
        </div>

        <div
          class="container"
          style="
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1vw;
          "
        >
          <input type="submit" value="Next" name="submit" />
        </div>
      </form>
    </div>
  </body>
</html>
