<div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <?php $listImages = explode(',' , $Hotel -> Image) ; ?>
                <?php foreach($listImages as $images => $image) : ?>
                    <div class="carousel-item active">
                        <img src="<?php echo $image ?>" class="d-block w-100" alt="...">
                    </div>
                <?php endforeach ; ?>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
<?php
        if(isset($_POST['btn-add-hotel'])) {
                        foreach($_FILES['image']['tmp_name'] as $key => $value) {
                            $image = './image_hotel/' .basename($_FILES['image']['name'][$key]) ;
                            $file = $_FILES['image']['tmp_name'][$key] ;
                            $err = $_FILES['image']['error'][$key] ;
                            if(empty($err) && move_uploaded_file($file , $image)) {
                                $imageUpload[] = $image ;
                            }
                        }
                        if(!empty($imageUpload)) {
                            $imagePaths = implode(',' , $imageUpload) ;
                            $address = $_POST['apartmentNumber'] .',' .$_POST['ward'] .',' .$_POST['district'] .',' .$_POST['province'] ;
                            createHotel($_POST['name'] , $imagePaths , $address , $_POST['phone'] , $_POST['email']) ;
                            
                        }
                    }

                    
                    if(isset($_GET['DeleteHotelID'])) {
                        $stringImage = getHotelsID($_GET['DeleteHotelID']) ;
                        $imagePaths = explode(',' , $stringImage -> Image) ;
                        foreach($imagePaths as $images => $image) {
                            if(file_exists($image)) {
                                unlink($image) ;
                            }
                        }
                        deleteHotel($_GET['DeleteHotelID']) ;
                    }

                    // Xóa nhiều khách sạn ;
                    if(isset($_POST['delete_checked'])) {
                        $listIDHotel = $_POST['check'] ;
                        foreach($listIDHotel as $HotelIDs => $HotelID) {
                            $stringImage = getHotelsID($HotelID) ;
                            $imagePaths = explode(',' , $stringImage -> Image) ;
                            foreach($imagePaths as $images => $image) {
                                if(file_exists($image)) {
                                    unlink($image) ;
                                }
                            }
                            deleteHotel($HotelID) ;
                        }
                        
                    }
                    ?>