<?
/*
** The dispatcher resolves the command which should be called and collects the arguments from the URL
**
*/
class Dispatcher {

    private $querypart = "";

    // Regular Expression which should match with the URL parts. One for the command and one for the argument keyword
    private $COMMAND_REGEX = "/cmd=/";
    private $ARGUMENT_REGEX = "/[\w]{1,50}=/";

    // I called the separator which separates the URL-Parameter query_separator
    private $QUERY_SEPARATOR = "&";
    // The argument_separator separates the key and the value of a parameter in the URL
    private $ARGUMENT_SEPARATOR = "=";

    // cmd holds the dispatched command, arguments the dispatched arguments
    private $cmd = "NULL";
    private $arguments = array();

    function __construct($querypart) {
        
        $this->querypart = $querypart;
        $this->dispatchQueries();
    }

    function dispatchQueries() {
        
        //split all URL-Parameter with the query_separator
        $queries = explode($this->QUERY_SEPARATOR, $this->querypart);
        //for each parameter check if it matches a command or an argument
        foreach ($queries as $value) {
            if (preg_match($this->COMMAND_REGEX, $value)) {
                //When it matches a command save the command into the variable cmd
                $cmdParts = explode($this->ARGUMENT_SEPARATOR, $value);
                if (count($cmdParts) == 2) {
                    $this->cmd = $cmdParts[1];
                }
            }
            if (preg_match($this->ARGUMENT_REGEX, $value)) {
                //when it matches an argument append the argument to the arguments array
                $argumentParts = explode($this->ARGUMENT_SEPARATOR, $value);
                if (count($argumentParts) == 2) {
                    $this->arguments[$argumentParts[0]] = $argumentParts[1];
                }
            }
        }
    }

    function getCommand() {
        
        return $this->cmd;
    }

    function getArguments() {
        
        return $this->arguments;
    }

    function printdispatched() {
        
        var_dump($this->cmd);
        var_dump($this->arguments);
    }
}