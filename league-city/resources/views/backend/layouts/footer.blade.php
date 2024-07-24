
        <footer>
            <div class="footer">
                <p>{{ date('Y'); }}  &copy; SecondMedic Admin Template</p>
                <p>Designed by SecondMedic</p>
            </div>
        </footer>
    </div>
</div>


<div class="modal fade" id="viewModel" tabindex="-1" aria-labelledby="viewModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Enquiry</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Name <br><b id="name"></b></p>
                </div>
                <div class="col-md-6 col-6">
                    <p>Mobile <br><b id="contact"></b></p>
                </div>
                <div class="col-md-12 col-12">
                    <p>Email <br><b id="email"></b></p>
                </div>
                <div class="col-md-12 ">
                    <p>Subject <br><b id="subject"></b></p>
                </div>
                <div class="col-md-12 ">
                    <p>Message <br><b id="message"></b></p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
