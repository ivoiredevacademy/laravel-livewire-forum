import Tagify from '@yaireo/tagify'
require('./bootstrap');

// Fetch default categories here
const tagifyElement = document.querySelector(".input-tag");
new Tagify(tagifyElement, {
    whitelist : ['PHP', 'React', 'Javascript', 'C++', 'HTML/CSS', 'Java', 'Laravel', 'Python'],
    dropdown : {
        enabled       : 0,              // show the dropdown immediately on focus
        position      : "text",         // place the dropdown near the typed text
        closeOnSelect : true,          // keep the dropdown open after selecting a suggestion
    }
});
