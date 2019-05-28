console.log("Projects")

class showProjectList {
    constructor(domselector, jsonURI){
        this.htmlContainer = document.querySelector(domselector);
        this.jsonURI = jsonURI;
        this.getData()
    }
      
    
    getData() {
        fetch(this.jsonURI)
            .then(res => {
                return res.json()
            })
            .then(data => {
                this.data = data;
                console.log(this.data)
                this.render();
            })
    }

    template() {
        const data = this.data;
       return data.projects.map(project =>
            {
                console.log(`${project.title}`)
                return `<h1>${project.title}</h1>`;
            
            }).join("")
    }

    render() {
       let template = this.template();
       console.log(template);
       this.htmlContainer.innerHTML = template;

    }
    
}

const projectList = new showProjectList('#projects-list', './projects.json')  