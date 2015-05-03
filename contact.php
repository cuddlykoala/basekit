<?php include "_/components/php/header.php"; ?>

    <div id="main">
      <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
              <form>
                  <div class="form-group">
                    <label for="nameInput" class="control-label">Name</label>
                      <input type="text" class="form-control" id="nameInput" placeholder="Name">                  
                  </div>
                  <div class="form-group">
                    <label for="emailInput" class="control-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="phoneInput" class="control-label">Phone</label>
                    <input type="text" class="form-control" id="phoneInput" placeholder="(800) 555-1234">                  
                  </div>

                  <div class="form-group">
                    <label for="messageInput" class="control-label">Message</label>
                    <textarea class="form-control"></textarea>
                  </div>
                
                  <div class="form-group">
                      <button type="submit" class="btn btn-default">Submit</button>
                  </div>

              </form>
            </div>

            <div class="col-md-6 col-sm-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5592.980637049528!2d-73.57180348456374!3d45.50020748080661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shotels!5e0!3m2!1sen!2sca!4v1430637686993" width="400" height="300" frameborder="0" style="border:0"></iframe>
              <p>Canada’s most international university, McGill is located in vibrant multicultural Montreal, in the francophone province of Quebec.</p>
              <address>
                <strong>Office: 2M020, Wong Building</strong>
                <p>Phone: (514) 398-5496</p>
                <a href="mailto:#">Email: Click here</a>
              </address>
            </div>
      </div>
    </div>

    <div id="footer_wrapper">
      <?php include "_/components/php/footer.php"; ?>
    </div>
    
  </body>
</html>