@extends('Admin.layouts.adminbody')
@section('title', 'Add Product')
@section('css')

@endsection
@section('admincontent')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Product Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="products.php">Products</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputName">Product Name :</label>
                    <input type="text" id="" name="" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Regular price (₹) :</label>
                    <input type="text" id="" name="" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Sale price (₹) :</label>
                    <input type="text" id="" name="" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Product Short Description :</label>
                    <textarea id="" name="" class="form-control" rows="5"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Product Details :</label>
                    <textarea id="" name="" class="form-control" rows="7"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                   <div class="form-group mb-0">
                    <label for="">Specifications :</label>
                   </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="" name="" class="form-control" placeholder="Enter Size">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="" name="" class="form-control" placeholder="Enter Weight (Kg)">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputStatus">Status :</label>
                    <select id="" name="" class="form-control custom-select">
                      <option value="">In Stock</option>
                      <option value="">Out Stock</option>
                      <option value="">On Backorder</option>
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header p-2">
                <h5 class="mb-0">Product Categories :</h5>
              </div>
            <div class="card-body category-select-area p-2">
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-1" value="Category-1">
                  <label for="category-1" class="custom-control-label cust-font-width-500">Category-1</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-2" value="Category-2">
                  <label for="category-2" class="custom-control-label cust-font-width-500">Category-2</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-3" value="Category-3">
                  <label for="category-3" class="custom-control-label cust-font-width-500">Category-3</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-4" value="Category-4">
                  <label for="category-4" class="custom-control-label cust-font-width-500">Category-4</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-5" value="Category-2">
                  <label for="category-5" class="custom-control-label cust-font-width-500">Category-5</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-3" value="Category-6">
                  <label for="category-6" class="custom-control-label cust-font-width-500">Category-6</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-3" value="Category-3">
                  <label for="category-3" class="custom-control-label cust-font-width-500">Category-3</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-1" value="Category-7">
                  <label for="category-7" class="custom-control-label cust-font-width-500">Category-7</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-2" value="Category-8">
                  <label for="category-8" class="custom-control-label cust-font-width-500">Category-8</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="category-3" value="Category-9">
                  <label for="category-9" class="custom-control-label cust-font-width-500">Category-9</label>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <div class="card">
            <div class="card-body p-2">
              <!-- Upload Area -->
              <div id="uploadArea" class="upload-area">
                <!-- Header -->
                <div class="upload-area__header">
                  <h3 class="upload-area__title">Upload Product Image (Size 400x400)</h3>
                  <p class="upload-area__paragraph">
                    File should be an image
                    <strong class="upload-area__tooltip">
                      Like
                      <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                    </strong>
                  </p>
                </div>
                <!-- End Header -->

                <!-- Drop Zoon -->
                <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                  <span class="drop-zoon__icon">
                    <i class='fa fa-file-image-o'></i>
                  </span>
                  <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                  <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                  <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                  <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
                </div>
                <!-- End Drop Zoon -->

                <!-- File Details -->
                <div id="fileDetails" class="upload-area__file-details file-details">
                  <h3 class="file-details__title">Uploaded File</h3>

                  <div id="uploadedFile" class="uploaded-file">
                    <div class="uploaded-file__icon-container">
                      <i class='fa fa-file-image-o uploaded-file__icon'></i>
                      <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
                    </div>

                    <div id="uploadedFileInfo" class="uploaded-file__info">
                      <span class="uploaded-file__name"></span>
                      <span class="uploaded-file__counter">0%</span>
                    </div>
                  </div>
                </div>
                <!-- End File Details -->
              </div>
              <!-- End Upload Area -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header p-2">
                <h5 class="mb-0">Product Gallery : (Size : 400 x 400)</h5>
              </div>
            <div class="card-body gallery-select-area p-2">
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12 p-2 mb-3">
          <a href="{{URL::to('admin/manage-product')}}" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->

    @endsection

    @section('js')
    <script type="text/javascript">
      // Design By
    // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

    // Select Upload-Area
    const uploadArea = document.querySelector('#uploadArea')

    // Select Drop-Zoon Area
    const dropZoon = document.querySelector('#dropZoon');

    // Loading Text
    const loadingText = document.querySelector('#loadingText');

    // Slect File Input
    const fileInput = document.querySelector('#fileInput');

    // Select Preview Image
    const previewImage = document.querySelector('#previewImage');

    // File-Details Area
    const fileDetails = document.querySelector('#fileDetails');

    // Uploaded File
    const uploadedFile = document.querySelector('#uploadedFile');

    // Uploaded File Info
    const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

    // Uploaded File  Name
    const uploadedFileName = document.querySelector('.uploaded-file__name');

    // Uploaded File Icon
    const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

    // Uploaded File Counter
    const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

    // ToolTip Data
    const toolTipData = document.querySelector('.upload-area__tooltip-data');

    // Images Types
    const imagesTypes = [
      "jpeg",
      "png",
      "svg",
      "gif"
    ];

    // Append Images Types Array Inisde Tooltip Data
    toolTipData.innerHTML = [...imagesTypes].join(', .');

    // When (drop-zoon) has (dragover) Event
    dropZoon.addEventListener('dragover', function (event) {
      // Prevent Default Behavior
      event.preventDefault();

      // Add Class (drop-zoon--over) On (drop-zoon)
      dropZoon.classList.add('drop-zoon--over');
    });

    // When (drop-zoon) has (dragleave) Event
    dropZoon.addEventListener('dragleave', function (event) {
      // Remove Class (drop-zoon--over) from (drop-zoon)
      dropZoon.classList.remove('drop-zoon--over');
    });

    // When (drop-zoon) has (drop) Event
    dropZoon.addEventListener('drop', function (event) {
      // Prevent Default Behavior
      event.preventDefault();

      // Remove Class (drop-zoon--over) from (drop-zoon)
      dropZoon.classList.remove('drop-zoon--over');

      // Select The Dropped File
      const file = event.dataTransfer.files[0];

      // Call Function uploadFile(), And Send To Her The Dropped File :)
      uploadFile(file);
    });

    // When (drop-zoon) has (click) Event
    dropZoon.addEventListener('click', function (event) {
      // Click The (fileInput)
      fileInput.click();
    });

    // When (fileInput) has (change) Event
    fileInput.addEventListener('change', function (event) {
      // Select The Chosen File
      const file = event.target.files[0];

      // Call Function uploadFile(), And Send To Her The Chosen File :)
      uploadFile(file);
    });

    // Upload File Function
    function uploadFile(file) {
      // FileReader()
      const fileReader = new FileReader();
      // File Type
      const fileType = file.type;
      // File Size
      const fileSize = file.size;

      // If File Is Passed from the (File Validation) Function
      if (fileValidate(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText.style.display = "block";
        // Hide Preview Image
        previewImage.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded
        fileReader.addEventListener('load', function () {
          // After Half Second
          setTimeout(function () {
            // Add Class (upload-area--open) On (uploadArea)
            uploadArea.classList.add('upload-area--open');

            // Hide Loading-text (please-wait) Element
            loadingText.style.display = "none";
            // Show Preview Image
            previewImage.style.display = 'block';

            // Add Class (file-details--open) On (fileDetails)
            fileDetails.classList.add('file-details--open');
            // Add Class (uploaded-file--open) On (uploadedFile)
            uploadedFile.classList.add('uploaded-file--open');
            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
            uploadedFileInfo.classList.add('uploaded-file__info--active');
          }, 500); // 0.5s

          // Add The (fileReader) Result Inside (previewImage) Source
          previewImage.setAttribute('src', fileReader.result);

          // Add File Name Inside Uploaded File Name
          uploadedFileName.innerHTML = file.name;

          // Call Function progressMove();
          progressMove();
        });

        // Read (file) As Data Url
        fileReader.readAsDataURL(file);
      } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

      };
    };

    // Progress Counter Increase Function
    function progressMove() {
      // Counter Start
      let counter = 0;

      // After 600ms
      setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
          // If (counter) is equle 100
          if (counter === 100) {
            // Stop (Counter Increase)
            clearInterval(counterIncrease);
          } else { // Else
            // plus 10 on counter
            counter = counter + 10;
            // add (counter) vlaue inisde (uploadedFileCounter)
            uploadedFileCounter.innerHTML = `${counter}%`
          }
        }, 100);
      }, 600);
    };


    // Simple File Validate Function
    function fileValidate(fileType, fileSize) {
      // File Type Validation
      let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

      // If The Uploaded File Type Is 'jpeg'
      if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText.innerHTML = 'jpg';
      } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type
        uploadedFileIconText.innerHTML = isImage[0];
      };

      // If The Uploaded File Is An Image
      if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
          return true;
        } else { // Else File Size
          return alert('Please Your File Should be 2 Megabytes or Less');
        };
      } else { // Else File Type
        return alert('Please make sure to upload An Image File Type');
      };
    };

    // :)
    </script>
    @endsection
