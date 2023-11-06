<?php
  include ('assets/php/header.php');
?>

<div class="container">
<div class="row">
    <div class="col-lg-12">
    <?php if($verified == 'Not Verfified!'): ?>
        <div class="alert alert-danger alert-dismissible taxt-center">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Your Email is not Verified. We  have sent you an Email Verification Link.</strong>
        </div>
        <?php endif; ?>
        <h4 class="text-center text-primary mt-2">Write your Class Notes Here and For your Students to Access.</h4>

</div>
</div>
<div class="card border-primary">
<h5 class="card-header bg-black d-flex justify-content-between">
      <span class="text-light lead align-self-center">All Notes</span>
      <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addNoteModal"> <i class="fas fa-plus-circle"></i>&nbsp;Add New Lesson Notes here.</a>
         
    </h5>
    <div class="card-body">
      <div class="table-responsive" id="showNote">
      <table class="table table-stripped text-center">
          <thead>
            <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Action/Assignment</th>
            </tr>
      </thead>
      <tbody>
        <tr>
        <td>1</td>
        <td>Pyrotechnics</td>
        <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam debitis hic rem fuga
           eius nulla consequatur excepturi quasi libero quis a delectus minima repellendus 
           qui, illo laudantium, corrupti quam id. </td>
        <td><a href="#" title="View Details" class="text-success infoBtn">
          <i class="fas fa-info-circle fa-lg"></i>
        </a>&nbsp;
         
          <a href="#" title="Edit Note" class="text-orange editBtn">
          <i class="fas fa-edit fa-lg"></i>

          <a href="#" title="Delete Note" class="text-danger deleteBtn">
          <i class="fas fa-trash-alt fa-lg"></i>
        </a>&nbsp;
        </td>  
      </tr>
      </tbody>
      </table>
    </div>
    </div>
    </div>
</div>
        <!--Add new Modal-->
                <div class="modal fade" id="addNoteModal">
           <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-success">
                <h4 class="modal-title text-light">Add new Note</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body"> 
              <form action="#" method="post" id="add-note-form" class="px-3">
              <div class="form-group">
              <input type="text" class="form-control form-control-lg" name="title"
           placeholder="Enter a title" required>
            </div>
                </form>
    </div>
    </div>
    </div>
    </div       >
        <!-- Modal ends here-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js" ></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>
    <script type="text/javascript">
      <script src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.13.6/datatables.min.js"></script>
        <script type="text/javascript">
         
</body>
</html> 