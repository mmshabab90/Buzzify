<?php
//class for handling all the user account validation

    class Account{

        private $errorArray;

        public function __construct()
        {
            $this->errorArray = array();
        }

        public function register($firstName, $lastName, $registerEmail, $confirmEmail, $registerPassword, $confirmPassword)
        {
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($registerEmail, $confirmEmail);
            $this->validatePasswords($registerPassword, $confirmPassword);

            if(empty($this->errorArray) == true)
            {
                //insert into db
                return true;
            }
            else
            {
                return false;
            }
        }

        //check to see if the error is in the array
        public function getError($error)
        {
            if(!in_array($error, $this->errorArray))
            {
                $error = "";
            }
            return "<div class=' alert alert - danger ' role=' alert '><span class = 'errorMessage'>$error</span></div>";
        }

        private function validateFirstName($firstName)
        {
            if(strlen($firstName) > 25 || strlen($firstName) < 2)
            {
                array_push($this->errorArray, "Your first name should be in between 2 and 25 characters");
                return;
            }

            //check if first name exists
        }


        private function validateLastName($lastName)
        {
            if(strlen($lastName) > 10 || strlen($lastName) < 2)
            {
                array_push($this->errorArray, "Your last name should be in between 2 and 10 characters");
                return;
            }

             //check if last name exists
        }


        private function validateEmails($registerEmail, $confirmEmail)
        {
            if($registerEmail != $confirmEmail)
            {
            array_push($this->errorArray, "Your emails don't match");
            return;
            }

            if(!filter_var($registerEmail, FILTER_VALIDATE_EMAIL))
            {
            array_push($this->errorArray, "Your emails id is not valid");
            return;
            }

            //check that email hasn't alerady been used
        }


        private function validatePasswords($registerPassword, $confirmPassword)
        {
            if ($registerPassword != $confirmPassword) {
                array_push($this->errorArray, "Your passwords don't match");
                return;
            }

            //check password fo alphanumerci character
            if(preg_match('/[^A-Za-z0-9]/', $registerPassword))
            {
                 array_push($this->errorArray, "Your passwords can ony contain numbers and letters");
                return;
            }
            
            if(strlen($registerPassword) > 30 || strlen($registerPassword) < 8)
            {
                array_push($this->errorArray, "Your password should be in between 8 and 30 characters");
                return;
            }
        }

    }

?>