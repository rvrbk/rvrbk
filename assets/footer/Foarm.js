import axios from 'axios';

export class Foarm {
    constructor(formElement) {
        this.formElements = [];
        this.postUrl = formElement.action;
        this.submitElement = formElement.querySelector('*[type=submit]');

        formElement.querySelectorAll(':scope input:not(input[type=button]), :scope textarea').forEach(formElement => {
            this.formElements.push(formElement);
        });

        this.submitElement.onclick = event => {
            event.preventDefault();
            this.submit();
        }
    }

    submit() {
        const pairs = {};

        this.formElements.forEach(formElement => {
            const isValid = formElement.checkValidity();
            
            if (!isValid) {
                formElement.reportValidity();
            }

            const key = formElement.attributes.name.value;
            const value = formElement.value; 
            
            pairs[key] = value;
        });

        axios.post(this.postUrl, pairs).then(response => {
            console.log(response);
        });
    }
}