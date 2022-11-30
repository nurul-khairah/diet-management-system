
              <div class="col-md-4 m-auto">
                  @if(session('message'))
                  <div class="alert alert-warning">
                      <h1 class="text-center">{{ session('message') }}</h1>
                  </div>
                  @endif
              </div>
          </div>

          <!-- @if(Session::has('success'))
          <div class="alert alert-warning">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert"></button>
          <span> {{ session('message') }}</span>
          </div>
          @endif -->
