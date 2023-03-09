<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mock Provisioning App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  </head>
  <body>
    <header>
      <div class="container text-center">
        <h1><img id="logo" src="img/logoipsum-249.svg" alt="https://logoipsum.com/artwork/249"><br>New Storage Request</h1>
      </div>
    </header>
    <main class="container">
      <form id="general">
          <div class="mb-3">
            <label for="business-unit" class="form-label">Business Unit</label>
            <select class="form-select" name="business-unit" aria-label="" required>
                <option value="finance">Finance</option>
                <option value="accounting">Accounting</option>
                <option value="marketing">Marketing</option>
                <option value="Support">Support</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="location" class="form-label">Preferred Datacenter</label>
            <select class="form-select" name="location" aria-label="" required>
                <option value="central-us">Central US</option>
                <option value="west-us">Western US</option>
              </select>
          </div>
      </form>
      <label class="form-label">Storage Type</label>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <label class="form-label accordion-header" id="headingOne" >
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <img src="img/documents.png" alt="https://www.flaticon.com/free-icons/paper Paper icons created by Freepik - Flaticon"> File</label>
              </button>
            </label>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body row">
              <form name="file" id="file">
                <div class="mb-3">
                  <label for="file-volume-name" class="form-label">Volume Name</label>
                  <input type="text" class="form-control" id="file-volume-name" name="file-volume-name" placeholder="Vol1" required>
                </div>
                <div class="row">
                  <div class="mb-3 col-6">
                    <label for="file-volume-type" class="form-label">Use Case</label>
                    <select class="form-select" name="file-volume-type" aria-label="" required>
                      <option value="cifs">Windows file share</option>
                      <option value="nfs">Unix/Linux</option>
                    </select>
                  </div>
                  <div class="mb-3 col-3">
                    <label for="file-volume-size" class="form-label">Volume Size</label>
                    <input type="number" step="0.25" min="1" class="form-control" id="file-volume-size" name="file-volume-size" placeholder="100" required>
                  </div>
                  <div class="mb-3 col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="file-volume-size-unit" id="file-volume-size-unit-mb" value="mb">
                      <label class="form-check-label" for="file-volume-size-unit-mb">
                        MB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="file-volume-size-unit" id="file-volume-size-unit-gb" value="gb" checked>
                      <label class="form-check-label" for="file-volume-size-unit-gb">
                        GB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="file-volume-size-unit" id="file-volume-size-unit-tb" value="tb">
                      <label class="form-check-label" for="file-volume-size-unit-tb">
                        TB
                      </label>
                    </div>
                  </div>  
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Provision NAS Share</button>
                </div>
                <div class="d-none feedback alert" role="alert"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <label class="form-label accordion-header"  id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <img src="img/hard-drive.png" alt="https://www.flaticon.com/free-icons/disk Disk icons created by Those Icons - Flaticon"> Block
            </button>
          </label>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form name="block" id="block">
                <div class="mb-3">
                  <label for="block-lun-name" class="form-label">LUN Name</label>
                  <input type="text" class="form-control" id="block-lun-name" placeholder="Lun1" required>
                </div>
                <div class="row">
                  <div class="mb-3 col-6">
                    <label for="block-lun-os" class="form-label">OS Type</label>
                    <select class="form-select" aria-label="" required>
                      <option value="solaris">Solaris</option>
                      <option value="windows">Windows</option>
                      <option value="hpux">HP-UX</option>
                      <option value="aix">AIX</option>
                      <option value="linux">Linux</option>
                      <option value="netware">NetWare</option>
                      <option value="vmware">VMware</option>
                      <option value="openvms">OpenVMS</option>
                      <option value="xen">Xen</option>
                      <option value="hyper_v">Hyper-V</option>                    
                    </select>
                  </div>
  
                  <div class="mb-3 col-3">
                    <label for="block-lun-size" class="form-label">LUN Size</label>
                    <input type="number" step="0.25" min="1" class="form-control" id="block-lun-size" name="block-lun-size" placeholder="100" required>
                  </div>
                  <div class="mb-3 col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="block-lun-size-unit" id="block-lun-size-unit-mb" value="mb">
                      <label class="form-check-label" for="block-lun-size-unit-mb">
                        MB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="block-lun-size-unit" id="block-lun-size-unit-gb" value="gb" checked>
                      <label class="form-check-label" for="block-lun-size-unit-gb">
                        GB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="block-lun-size-unit" id="block-lun-size-unit-tb" value="tb">
                      <label class="form-check-label" for="block-lun-size-unit-tb">
                        TB
                      </label>
                    </div>
                  </div>  
                </div>
                <div class="">
                  <div class="mb-3">
                    <label for="block-lun-initiators" class="form-label">Host Initiators</label>
                    <textarea class="form-control" id="block-lun-initiators" name="block-lun-initiators" rows="5" placeholder="Enter a comma-separated list of initiators. The initiator can contain an FC WWPN such as '21:00:00:0:8b:05:05:04' or an iSCSI initiator name such as 'iqn.1998-01.com.example.iscsi:namel' or 'eui.0123456789abcdef'."></textarea>
                  </div>
                  
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Create LUN</button>
                </div>
                <div class="d-none feedback alert" role="alert"></div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <label class="form-label accordion-header"  id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">      
              <img src="img/bucket.png" alt="https://www.flaticon.com/free-icons/object Object icons created by Freepik - Flaticon"> Object
            </button>
          </label>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form name="object" id="object">
                <div class="mb-3">
                  <label for="object-bucket-name" class="form-label">Bucket Name</label>
                  <div class="invalid-feedback d-none">
                    The name should begin with a lowercase letter or a number. The name can 
                    contain only "a" to "z", "0" to "9", hyphen (-), and period (.). The 
                    length of the name should be between 3 to 63 characters. 
                  </div>
                  <input type="text" class="form-control" id="object-bucket-name" name="object-bucket-name" placeholder="S3-Bucket" required>
                </div>

                <div class="row">
                  <div class="mb-3 col-3">
                    <label for="object-bucket-size" class="form-label">Bucket Size</label>
                    <input type="number" step="0.25" min="1" class="form-control" id="object-bucket-size" name="object-bucket-size" placeholder="100" required>
                  </div>
                  <div class="mb-3 col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="object-bucket-size-unit" id="object-bucket-size-unit-mb" value="mb">
                      <label class="form-check-label" for="object-bucket-size-unit-mb">
                        MB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="object-bucket-size-unit" id="object-bucket-size-unit-gb" value="gb" checked>
                      <label class="form-check-label" for="object-bucket-size-unit-gb">
                        GB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="object-bucket-size-unit" id="object-bucket-size-unit-tb" value="tb">
                      <label class="form-check-label" for="object-bucket-size-unit-tb">
                        TB
                      </label>
                    </div>
                  </div>  
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Add S3 Bucket</button>
                </div>
                <div class="d-none feedback alert" role="alert"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <footer class="text-center pt-2">
      <small>&copy; <script>document.write(new Date().getFullYear())</script> Storage Portal</small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/api.js"></script>
  </body>
</html>

