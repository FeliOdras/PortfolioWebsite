console.log("Projects")

class showProjectList {
    constructor(domselector, jsonURI) {
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
        return data.projects.map(project => {
            return `
                <article class="box flexboxitem">
                <h4>${project.title}</h4>
                <a href="${project.projectUri}" target="_blank">
                <img src="${project.screenshotUri}" alt="${project.title}"></a> <br>
                <div>
                    <small>${project.description}</small>
                </div>
                <hr>
                <div>
                    <small>
                        <a class="text-link"  href="${project.projectUri}" target="_blank"><i class="fas fa-globe-europe"></i> Live Project</a><br>
                        <a class="text-link"  href="${project.githubUri}" target="_blank"><i class="fab fa-github"></i> Code on GitHub</a>
                    </small>
                </div>   
                <hr>   
                <div class="xsmall">${project.techText}</div>                
        </article>
                `;

        }).join("")
    }

    render() {
        let template = this.template();
        console.log(template);
        this.htmlContainer.innerHTML = template;

    }

}

const projectList = new showProjectList('#projects-list', './projects.json')  