package SRI.Autorizacion;

import java.net.MalformedURLException;
import java.net.URL;
import javax.xml.namespace.QName;
import javax.xml.ws.Service;
import javax.xml.ws.WebEndpoint;
import javax.xml.ws.WebServiceClient;
import javax.xml.ws.WebServiceException;
import javax.xml.ws.WebServiceFeature;

/**
 * This class was generated by the JAX-WS RI. JAX-WS RI 2.2.6-1b01 Generated
 * source version: 2.2
 *
 */
@WebServiceClient(name = "AutorizacionComprobantesOfflineService", targetNamespace = "http://ec.gob.sri.ws.autorizacion", wsdlLocation = "https://celcer.sri.gob.ec/comprobantes-electronicos-ws/AutorizacionComprobantesOffline?wsdl")
public class AutorizacionComprobantesOfflineService
        extends Service {

    private static URL AUTORIZACIONCOMPROBANTESOFFLINESERVICE_WSDL_LOCATION;
    private static WebServiceException AUTORIZACIONCOMPROBANTESOFFLINESERVICE_EXCEPTION;
    private final static QName AUTORIZACIONCOMPROBANTESOFFLINESERVICE_QNAME = new QName("http://ec.gob.sri.ws.autorizacion", "AutorizacionComprobantesOfflineService");

    static {

    }

    public AutorizacionComprobantesOfflineService(String ambiente) {
        super(__getWsdlLocation(ambiente), AUTORIZACIONCOMPROBANTESOFFLINESERVICE_QNAME);
    }

    /**
     *
     * @return returns AutorizacionComprobantesOffline
     */
    @WebEndpoint(name = "AutorizacionComprobantesOfflinePort")
    public AutorizacionComprobantesOffline getAutorizacionComprobantesOfflinePort() {
        return super.getPort(new QName("http://ec.gob.sri.ws.autorizacion", "AutorizacionComprobantesOfflinePort"), AutorizacionComprobantesOffline.class);
    }

    /**
     *
     * @param features A list of {@link javax.xml.ws.WebServiceFeature} to
     * configure on the proxy. Supported features not in the
     * <code>features</code> parameter will have their default values.
     * @return returns AutorizacionComprobantesOffline
     */
    @WebEndpoint(name = "AutorizacionComprobantesOfflinePort")
    public AutorizacionComprobantesOffline getAutorizacionComprobantesOfflinePort(WebServiceFeature... features) {
        return super.getPort(new QName("http://ec.gob.sri.ws.autorizacion", "AutorizacionComprobantesOfflinePort"), AutorizacionComprobantesOffline.class, features);
    }

    private static URL __getWsdlLocation(String ambiente) {

        URL url = null;
        WebServiceException e = null;
        try {
            if (ambiente.equals("2")) {
                url = new URL("https://cel.sri.gob.ec/comprobantes-electronicos-ws/AutorizacionComprobantesOffline?wsdl");
            } else {
                url = new URL("https://celcer.sri.gob.ec/comprobantes-electronicos-ws/AutorizacionComprobantesOffline?wsdl");
            }
        } catch (MalformedURLException ex) {
            e = new WebServiceException(ex);
        }
        AUTORIZACIONCOMPROBANTESOFFLINESERVICE_WSDL_LOCATION = url;
        AUTORIZACIONCOMPROBANTESOFFLINESERVICE_EXCEPTION = e;

        if (AUTORIZACIONCOMPROBANTESOFFLINESERVICE_EXCEPTION != null) {
            throw AUTORIZACIONCOMPROBANTESOFFLINESERVICE_EXCEPTION;
        }
        return AUTORIZACIONCOMPROBANTESOFFLINESERVICE_WSDL_LOCATION;
    }

}