<!Doctype html>
<html>

  <head>
    <title>UB International Language Association</title>
  </head>

<?php
include('header.php');
?>

<div class="row">
    <div class="col-md-13">
      <div class="well well-sm">
          <form class="form-horizontal" method="get" action="send.php" enctype="text/plain">
          <div class="container">
            <h2>Contact Us</h2>
            <div class="form-group">
               <input name="name" type="text" placeholder="Name" class="form-control">
            </div>

            <div class="form-group">
              <input name="email" type="text" placeholder="Email Address" class="form-control">
            </div>

            <div class="form-group">
              <input name="subject" type="text" placeholder="Subject" class="form-control">
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Enter your message here." rows="7"></textarea>
            </div>

            <div class="form-group">
              <button type="reset" class="btn btn-default" value="Clear Form">Clear</button>
              <button type="submit" class="btn btn-default">Submit</button>
            </div>

          </div>
          </form>
      </div>
    </div>
  </div>

<?php
include('footer.php');
?>

</html>
