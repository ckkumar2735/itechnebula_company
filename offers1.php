<table class="table">
                                        <thead>
                                            <tr>
                                                <th><span class="badge badge-dark">ID</span></th>
                                                <th><span class="badge badge-dark">ORDER NUMBER</span></th>
                                                <th><span class="badge badge-dark">NAME</span></th>
                                                <th><span class="badge badge-dark">EMAIL</span></th>
                                                <th><span class="badge badge-dark">PHONE</span></th>
                                                <th><span class="badge badge-dark">CITY</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            while ($res = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><span class="badge badge-dark"><?php echo $res['id']; ?></span></td>
                                                    <td><span><?php echo $res['orderNumber']; ?> </span></td>
                                                    <td><span><?php echo $res['name']; ?> </span></td>
                                                    <td><span><?php echo $res['email']; ?> </span></td>
                                                    <td><span><?php echo $res['phone']; ?></span></td>
                                                    <td><span><?php echo $res['city']; ?></span></td>
                                                </tr>

                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>