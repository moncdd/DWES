package daw;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class HolaMundoServlet
 */
@WebServlet("/HolaMundoServlet")
public class HolaMundoServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public HolaMundoServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		// Tipo de contenido que vamos a devolver
        response.setContentType("text/html;charset=UTF-8");

        // Obtenemos el objeto para escribir HTML
        PrintWriter out = response.getWriter();

        // HTML
        out.println("<!DOCTYPE html>");
        out.println("<html lang='es'>");

        out.println("  <head>");
        out.println("    <meta charset='UTF-8'>");
        out.println("    <title>Hola Mundo</title>");
        out.println("  </head>");

        out.println("  <body>");
        out.println("    <h1>¡Hola Mundo!</h1>");
        out.println("  </body>");
        out.println("</html>");
	}

}
