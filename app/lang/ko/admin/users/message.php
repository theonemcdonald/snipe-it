<?php

return array(

    'accepted'                  => 'You have successfully accepted this asset.',
    'declined'                  => 'You have successfully declined this asset.',
    'user_exists'               => '사용자가 이미 존재합니다!',
    'user_not_found'            => '사용자 [:id]는 존재하지 않습니다.',
    'user_login_required'       => '로그인 항목을 입력해 주세요.',
    'user_password_required'    => '비밀번호를 입력해 주세요.',
    'insufficient_permissions'  => '승인 불충분.',
    'user_deleted_warning'      => '이 사용자는 삭제되었습니다. 그것들을 수정하려면 이 사용자를 복원하던가 새 자산들을 생성하세요.',
    'ldap_not_configured'        => 'LDAP integration has not been configured for this installation.',


    'success' => array(
        'create'    => '사용자가 생성되었습니다.',
        'update'    => '사용자가 갱신 되었습니다.',
        'delete'    => '사용자가 삭제 되었습니다.',
        'ban'       => '사용자가 금지 처리 되었습니다.',
        'unban'     => '사용자의 금지 처리가 해제 되었습니다.',
        'suspend'   => '사용자를 대기 시켰습니다.',
        'unsuspend' => '사용자의 대기를 해제하였습니다.',
        'restored'  => '사용자를 복원하였습니다.',
        'import'    => '사용자를 내보냈습니다.',
    ),

    'error' => array(
        'create' => '사용자를 생성하는 중 문제가 발생했습니다. 다시 시도해 주세요.',
        'update' => '사용자를 갱신하는 중 오류가 발생했습니다. 다시 시도해 주세요.',
        'delete' => '사용자를 삭제하는 중 문제가 발생했습니다. 다시 시도해 주세요.',
        'unsuspend' => '사용자의 대기 해제 중 문제가 발생했습니다. 다시 시도하세요.',
        'import'    => '사용자를 내보내기 할 때 문제가 발생했습니다. 다시 시도하세요.',
        'asset_already_accepted' => '이 자산은 이미 수락되었습니다.',
        'accept_or_decline' => 'You must either accept or decline this asset.',
        'ldap_could_not_connect' => 'Could not connect to the LDAP server. Please check your LDAP server configuration in the LDAP config file. <br>Error from LDAP Server:',
        'ldap_could_not_bind' => 'Could not bind to the LDAP server. Please check your LDAP server configuration in the LDAP config file. <br>Error from LDAP Server: ',
        'ldap_could_not_search' => 'Could not search the LDAP server. Please check your LDAP server configuration in the LDAP config file. <br>Error from LDAP Server:',
        'ldap_could_not_get_entries' => 'Could not get entries from the LDAP server. Please check your LDAP server configuration in the LDAP config file. <br>Error from LDAP Server:',
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'File successfully deleted.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload',
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
