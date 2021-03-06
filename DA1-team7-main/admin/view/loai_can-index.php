<div class="right__title">Bảng loại căn hộ</div>
<div class="right__table">
    <p class="right__tableTitle">Danh sách loại căn hộ</p>
    <div class="right__tableWrapper">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th style="text-align: center;">Loại căn hộ</th>
                    <!-- <th>ID Sản Phẩm</th>
                    <th>Trạng Thái</th> -->
                    <th>Sửa</th>
                    <th>Xóa</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach($ds as $ds) { 
                $stt+=1;
                ?>
                <tr>
                    <td><?=$stt?></td>
                    <td><?=$ds["ten_can"]?></td>

                    <td>
                        <a href="<?=ADMIN_URL?>/?ctrl=loai_can&act=edit&ma_loai=<?=$ds['ma_loai']?>" style="color: #455A64;"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a class="sua" href="#" style="color: #455A64;"><i class="fas fa-trash-alt"></i></a>
                        <div class="delete-loaican">
                            <div class="delete-container">
                                <div class="delete-form">
                                    <h3 style="width: 100%;float: left;line-height: 100px;text-align: center;">Bạn có muốn xóa không ?</h3>
                                    <div class="nut">
                                        <a href="#" class="co" style="padding: 10px 20px;background-color: #f0f0f0;border-radius: 20px;width: 100px;margin-right: 10px;color:black;">Không</a>
                                        <a href="?ctrl=loai_can&act=delete&ma_loai=<?=$ds['ma_loai']?>" class="co" style="padding: 10px 20px;background-color: red;border-radius: 20px;width: 100px;color: white;">Có</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php }?>
            </tbody>

        </table>

    </div>
</div>
