<?php 
function validate(array $fields) {

    $request = request();
    $validate = [];

    foreach ($fields as $field => $type) {
        switch ($type) {
            
                case 's':
                    $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                    break;

                    case 'e':
                        $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                        break;

                        case 'on':
                            $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_URL);
                            break;
                   
                break;
        }
    }
    return (object) $validate;
};

?>