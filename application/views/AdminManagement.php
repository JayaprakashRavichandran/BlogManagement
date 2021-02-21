<?php
require_once APP_VIEW_ROOT . '/switchStyle.php';
$users = $normalUsers;

require_once APP_VIEW_ROOT . '/header.php';

?>

<body>
    <form method="post" action="/updateUser">
        <table>
           <tr class="tableRow">
               <th>S.No</th>
               <th>FirstName</th>
               <th>LastName</th>
               <th>emailId</th>
               <th>PhoneNumber</th>
               <th>Status</th>
           </tr>
            <?php foreach ($users as $eachUser) { ?>
            <tr>
                <td><?= $eachUser->USER_ID ?></td>
                <td><?= $eachUser->FIRST_NAME ?></td>
                <td><?= $eachUser->LAST_NAME ?></td>
                <td><?= $eachUser->EMAIL_ID ?></td>
                <td><?= $eachUser->PHONE_NUMBER ?></td>
                <td>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>

