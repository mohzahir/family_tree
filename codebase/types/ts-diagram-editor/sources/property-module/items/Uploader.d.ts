import { Text } from "./Text";
export declare class Uploader extends Text {
    private _loading;
    constructor(conf: any, evs: any);
    toVDOM(): any;
    protected _getBase64(file: any): Promise<string>;
    protected _onUpload(e: any): void;
}
