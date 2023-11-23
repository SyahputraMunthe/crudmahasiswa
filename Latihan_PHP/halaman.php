<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>form</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
      <h1>COLLEGE ADMISSIONS FORM</h1>
      <P>Enter your admission information below</P>

      <form>
            <div class="mb-5 mt-5 row">
                  <label for="floatingInput" class="form-label">Name</label>
                  <div class="col- sm 4">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        <div id="emailHelp" class="form-text">first name</div>
                      </div>
                  <div class="col- sm 4">
                        <input type="text" class="form-control" placeholder="middle name" aria-label="middle name">
                        <div id="emailHelp" class="form-text">middle name</div>
                      </div>
                  <div class="col-4">
                        <input type="text" class="form-control" placeholder="last name" aria-label="last name">
                        <div id="emailHelp" class="form-text">last name</div>
                      </div>
                </div>
            </div>
            <div class="mb-5 row">
                  <label for="floatingInput" class="form-label">birth date</label>
                  <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>

                            </select>
                        <div id="emailHelp" class="form-text">month</div>
                      </div>
                  <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>

                            </select>
                        <div id="emailHelp" class="form-text">day</div>
                      </div>
                  <div class="col-4">
                        <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>

                            </select>
                        <div id="emailHelp" class="form-text">year</div>
                      </div>
                </div>

            <div class="mb-5 row">
                <label for="floatingInput" class="form-label">GENDER</label>
                <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                            Default radio
                          </label>
                    </div>
                <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                            Default checked radio
                          </label>
                    </div>
              </div>
          </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>