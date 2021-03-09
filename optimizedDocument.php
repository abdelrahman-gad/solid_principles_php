<?php 

interface ExportableDocumentInterface{
    public function export(Document $document);
}

class HtmlExportableDocument implements ExportableDocumentInterface{
    public function export(Document $document){
        echo "DOCUMENT EXPORTED TO HTML".PHP_EOL;
        echo "Title: ".$document->getTitle().PHP_EOL;
        echo "Content: ".$document->getContent().PHP_EOL.PHP_EOL;
    }
}
class PdfExportableDocument implements ExportableDocumentInterface{
     public function export(Document $document){
        echo "DOCUMENT EXPORTED TO PDF".PHP_EOL;
        echo "Title: ".$document->getTitle().PHP_EOL;
        echo "Content: ".$document->getContent().PHP_EOL.PHP_EOL;
     }
}


class Document
{
    protected $title;
    protected $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content= $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}



$document = new Document('some title', 'some content');
// exporting  in PDF format
$pdfFile = new PdfExportableDocument;
$pdfFile->export($document);
echo "<br/>";

// exporting in HTML format
$htmlFile = new HtmlExportableDocument;
$htmlFile->export($document);