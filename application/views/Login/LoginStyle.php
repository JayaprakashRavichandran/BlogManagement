<style>
#main-holder {
  width: 50%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 7px;
  box-shadow: 0px 0px 5px 2px black;
  margin: auto;
  margin-top: 10%;
}

#login-error-msg-holder {
    width: 100%;
    height: 100%;
    display: grid;
    justify-items: center;
    align-items: center;
    color: red;
}

#login-error-msg {
    width: 23%;
    text-align: center;
    margin: 0;
    padding: 5px;
    font-size: 12px;
    font-weight: bold;
    color: #8a0000;
    border: 1px solid #8a0000;
    background-color: #e58f8f;
    opacity: 0;
}

#error-msg-second-line {
    display: block;
}

#login-form {
    align-self: flex-start;
    display: grid;
    justify-items: center;
    align-items: center;
}

.login-form-field::placeholder {
    color: #3a3a3a;
}

.login-form-field {
    /*border: none;*/
    border-bottom: 1px solid #3a3a3a;
    margin-bottom: 10px;
    border-radius: 3px;
    outline: none;
    padding: 0px 0px 5px 5px;
}

#login-form-submit {
    width: 100%;
    padding: 7px;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    background-color: #3a3a3a;
    cursor: pointer;
    outline: none;
    margin-top: 2rem;
}
#password-view{
    display: flex;
}
</style>