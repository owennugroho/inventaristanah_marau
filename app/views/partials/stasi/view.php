<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Stasi</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-nama_stasi">
                                        <th class="title"> Nama Stasi: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['nama_stasi']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama_stasi" 
                                                data-title="Enter Nama Stasi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['nama_stasi']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-desa">
                                        <th class="title"> Desa: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['desa']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="desa" 
                                                data-title="Enter Desa" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['desa']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-rt">
                                        <th class="title"> Rt: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['rt']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="rt" 
                                                data-title="Enter Rt" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['rt']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-rw">
                                        <th class="title"> Rw: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['rw']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="rw" 
                                                data-title="Enter Rw" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['rw']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-alamat">
                                        <th class="title"> Alamat: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['alamat']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="alamat" 
                                                data-title="Enter Alamat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['alamat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-deskripsi">
                                        <th class="title"> Deskripsi: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="deskripsi" 
                                                data-title="Enter Deskripsi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['deskripsi']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-surat">
                                        <th class="title"> Surat: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['surat']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="surat" 
                                                data-title="Enter Surat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-foto_gereja">
                                        <th class="title"> Foto Gereja: </th>
                                        <td class="value"><?php Html :: page_img($data['foto_gereja'],100,100,1); ?></td>
                                    </tr>
                                    <tr  class="td-foto_tanah">
                                        <th class="title"> Foto Tanah: </th>
                                        <td class="value"><?php Html :: page_img($data['foto_tanah'],100,100,1); ?></td>
                                    </tr>
                                    <tr  class="td-tanggal_input">
                                        <th class="title"> Tanggal Input: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{altFormat: 'd-m-Y', enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tanggal_input']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("stasi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tanggal_input" 
                                                data-title="Enter Tanggal Input" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tanggal_input']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Print
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                            </div>
                                        </div>
                                        <a class="btn btn-sm btn-info"  href="<?php print_link("stasi/edit/$rec_id"); ?>">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("stasi/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <!-- Empty Record Message -->
                                    <div class="text-muted p-3">
                                        <i class="fa fa-ban"></i> No Record Found
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
