class Footer extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML=`
        <footer>
            <div class="contenedor_footer">
                <div class="organizacion_footer">
                    <a href="#">UNIVERCIDAD DE LAS FUERZAS ARMADAS "ESPE"</a>
                </div>

                <div class="derechos_footer">
                    <p>@Todos los redechos reservados</p>
                </div>
            </div>
        </footer>
        `
    }
}
window.customElements.define('pag-footer',Footer)